<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fhotel;

class FhotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Fhotel::all();
        return view('admin.fhotel', compact('datas'), [
            "title" => "Fasilitas Hotel"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Fhotel;
        return view('admin.tambah-fasilitas-hotel', compact('model'), [
            "title" => "Tambah Fasilitas Hotel"
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
        $model = new Fhotel;
        $model->nama_fasilitas = $request->nama_fasilitas;
        $model->keterangan = $request->keterangan;
        $model->image = $request->image;
        $model->save();

        return redirect('fhotel')->with('toast_success', 'Berhasil Ditambahkan!!');
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
        $model = Fhotel::find($id);
        return view('admin.edit-fasilitas-hotel', compact('model'), [
            "title" => "Edit Fasilitas Hotel"
        ]);
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
        $model = Fhotel::find($id);
        $model->nama_fasilitas = $request->nama_fasilitas;
        $model->keterangan = $request->keterangan;
        $model->image = $request->image;
        $model->save();

        return redirect('fhotel')->with('toast_success', 'Berhasil Diedit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Fhotel::find($id);
        $model->delete();

        return redirect('fhotel')->with('toast_success', 'Berhasil Dihapus!!');
    }
}
