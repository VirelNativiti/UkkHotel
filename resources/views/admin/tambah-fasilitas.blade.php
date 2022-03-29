@extends('layouts.master')

@section('content')
  <br>
  <div class="container">
    <h2 class="ml-4">Tambah Fasilitas Kamar</h2>
    <form method="POST" action="{{ url('fkamar') }}"> 
      @csrf
      <div class="form-group pl-4">
        <label>Tipe Kamar :</label>
          <select name="tipe_kamar" id="tipe_kamar" class="form-control">
            <option selected>Choose room type</option>
            <option value="Deluxe">Deluxe</option>
            <option value="Superior">Superior</option>
          </select>
      </div>
      <div class="form-group pl-4">
        <label>Nama Fasilitas :</label>
        <input type="text" name="nama_fasilitas" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary ml-4">Simpan</button>
    </form>
  </div>
  @include('sweetalert::alert')
@endsection