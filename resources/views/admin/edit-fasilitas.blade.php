@extends('layouts.master')

@section('content')
  <br>
  <div class="container">
    <h2 class="ml-4">Edit Fasilitas Kamar</h2>
    <form method="POST"  action="{{ url('fkamar/'.$model->id) }}">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
      <div class="form-group pl-4">
        <label>Tipe Kamar :</label>
        <input type="text" name="tipe_kamar" value="{{ $model->tipe_kamar }}" class="form-control">
      </div>
      <div class="form-group pl-4">
        <label>Nama Fasilitas :</label>
        <input type="text" name="nama_fasilitas" value="{{ $model->nama_fasilitas }}" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary ml-4">Simpan</button>
    </form>
  </div>
@endsection