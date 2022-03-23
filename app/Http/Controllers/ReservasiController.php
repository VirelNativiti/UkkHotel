<?php

namespace App\Http\Controllers;

use App\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Reservasi::all();
        return view('tamu.reservasi', compact('datas'), [
            "title" => "Reservasi"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $model = new Reservasi;
        // return view('tamu.reservasi', compact('model'), [
        //     "title" => "Reservasi"
        // ]);
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Reservasi;
        $model->nama_pemesan= $request->nama_pemesan;
        $model->email = $request->email;
        $model->no_handphone = $request->no_handphone;
        $model->nama_tamu = $request->nama_tamu;
        $model->tipe_kamar = $request->tipe_kamar;
        $model->save();

        return redirect('reservasi');
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
