<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Kamarr;
use Illuminate\Support\Facades\DB;

class KamarrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Kamarr::all();
        return view('tamu.kamarr', compact('datas'), [
            "title" => "Room"
        ]);
    }

    public function cetak()
    {
        $cetak = DB::table('kamarr')
        ->where('email', auth()->user()->email)
        ->get();
        // dd($cetak);
        return view('tamu.cetak', 
            compact('cetak'), [
            "title" => "Print"
        ]);
    }
    public function pemesanan(Request $request)
    {
        $pemesanan = DB::table('kamarr')
        ->where('id', $request->id)
        ->get();
        // dd($cetak);
        return view('tamu.pemesanan', 
            compact('pemesanan'), [
            "title" => "Print"
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Kamarr;
        return view('tamu.kamarr', compact('model'), [
            "title" => "Reservasi"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $awal = DB::table('dkamars')->where('tipe_kamar', $request->tipe_kamar)->value('jumlah_kamar');

        DB::table('dkamars')->where('tipe_kamar', $request->tipe_kamar)->update([
            'jumlah_kamar' => $awal - $request->jumlah_kamar
        ]);
       
        $model = new Kamarr;
        $model->nama_pemesan= $request->nama_pemesan;
        $model->email = $request->email;
        $model->no_handphone = $request->no_handphone;
        $model->tgl_checkin = $request->tgl_checkin;
        $model->tgl_checkout = $request->tgl_checkout;
        $model->nama_tamu = $request->nama_tamu;
        $model->jumlah_kamar = $request->jumlah_kamar;
        $model->tipe_kamar = $request->tipe_kamar;
        $model->save();

        return redirect('kamarr')->with('success', 'Order Successful!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
