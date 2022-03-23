@extends('layouts.master')

@section('content')
  <br>
  <div class="container">
    <h2 class="ml-4">Edit Kamar</h2>
    <form method="POST"  action="{{ url('dkamar/'.$model->id) }}">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
      <div class="form-group pl-4">
        <label>Nama Kamar :</label>
        <input type="text" name="nama_kamar" value="{{ $model->nama_kamar }}" class="form-control">
      </div>
      <div class="form-group pl-4">
        <label>Tipe Kamar :</label>
        <input type="text" name="tipe_kamar" value="{{ $model->tipe_kamar }}" class="form-control">
      </div>
      <div class="form-group pl-4">
        <label>Jumlah Kamar :</label>
        <input type="text" name="jumlah_kamar" value="{{ $model->jumlah_kamar }}" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary ml-4">Simpan</button>
    </form>
  </div>
@endsection