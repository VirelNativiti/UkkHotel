<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dkamar;

class DkamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Dkamar::all();
        return view('admin.dkamar', compact('datas'), [
            "title" => "Data Kamar"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Dkamar;
        return view('admin.tambah', compact('model'), [
            "title" => "Tambah Kamar"
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
        $model = new Dkamar;
        $model->tipe_kamar = $request->tipe_kamar;
        $model->jumlah_kamar = $request->jumlah_kamar;
        $model->save();

        return redirect('dkamar')->with('toast_success', 'Berhasil Ditambahkan!!');
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
        $model = Dkamar::find($id);
        return view('admin.edit', compact('model'), [
            "title" => "Edit"
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
        $model = Dkamar::find($id);
        $model->tipe_kamar = $request->tipe_kamar;
        $model->jumlah_kamar = $request->jumlah_kamar;
        $model->save();

        return redirect('dkamar')->with('toast_success', 'Berhasil Diedit!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Dkamar::find($id);
        $model->delete();

        return redirect('dkamar')->with('toast_success', 'Berhasil Dihapus!!');
    }
}
