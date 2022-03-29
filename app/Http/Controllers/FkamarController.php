<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fkamar;

class FkamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Fkamar::all();
        return view('admin.fkamar', compact('datas'), [
            "title" => "Fasilitas Kamar"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Fkamar;
        return view('admin.tambah-fasilitas', compact('model'), [
            "title" => "Tambah Fasilitas Kamar"
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
        $model = new Fkamar;
        $model->tipe_kamar = $request->tipe_kamar;
        $model->nama_fasilitas = $request->nama_fasilitas;
        $model->save();

        return redirect('fkamar')->with('toast_success', 'Berhasil Ditambahkan!!');
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
        $model = Fkamar::find($id);
        return view('admin.edit-fasilitas', compact('model'), [
            "title" => "Edit Fasilitas Kamar"
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
        $model = Fkamar::find($id);
        $model->tipe_kamar = $request->tipe_kamar;
        $model->nama_fasilitas = $request->nama_fasilitas;
        $model->save();

        return redirect('fkamar')->with('toast_success', 'Berhasil Diedit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Fkamar::find($id);
        $model->delete();

        return redirect('fkamar')->with('toast_success', 'Berhasil Dihapus!!');
    }
}
