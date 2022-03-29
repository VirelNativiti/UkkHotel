@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col">
          <h1 class="ml-3">Data Fasilitas Kamar</h1>
        </div>
        <br>
        <a class="btn btn-primary mb-2" href="{{ url('fkamar/create') }}">Tambah</a>
        <table class="table-bordered table ml-4">
          <tr>
            <th>Tipe Kamar</th>
            <th>Nama Fasilitas</th>
            <th colspan="2">Aksi</th>
          </tr>
          @foreach ($datas as $key=>$value)
          <tr>
            <td>{{ $value->tipe_kamar }}</td>
            <td>{{ $value->nama_fasilitas }}</td>
            <td><a class="btn btn-info" href="/fkamar/{{ $value->id }}/edit">Edit</a></td>
            <td>
              <form action="{{ url('fkamar/'.$value->id) }}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" type="submit">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

  </section>
  @include('sweetalert::alert')
  <!-- /.content -->    
@endsection