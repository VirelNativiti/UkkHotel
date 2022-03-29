@extends('layouts.master')

@section('content')
  <br>
  <div class="container">
    <h2 class="ml-4">Edit Kamar</h2>
    <form method="POST"  action="{{ url('fhotel/'.$model->id) }}">
      @csrf
      <input type="hidden" name="_method" value="PATCH">
      <div class="form-group pl-4">
        <label>Nama Fasilitas :</label>
        <input type="text" name="nama_fasilitas" value="{{ $model->nama_fasilitas }}" class="form-control">
      </div>
      <div class="form-group pl-4">
        <label>Keterangan :</label>
        <input type="text" name="keterangan" value="{{ $model->keterangan }}" class="form-control">
      </div>
      <div class="form-group pl-4">
        <label>Image :</label>
        <input type="text" name="image" value="{{ $model->image }}" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary ml-4">Simpan</button>
    </form>
  </div>
  @include('sweetalert::alert')
@endsection