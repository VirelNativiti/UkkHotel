@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="ml-3">Data Fasilitas Kamar</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          </ol>
        </div>
        <br>
        <a class="btn btn-primary ml-4 mb-2" href="{{ url('fhotel/create') }}">Tambah</a>
        <table class="table-bordered table ml-4">
          <tr>
            <th>Nama Fasilitas</th>
            <th>Keterangan</th>
            <th>Image</th>
            <th colspan="2">Aksi</th>
          </tr>
          @foreach ($datas as $key=>$value)
          <tr>
            <td>{{ $value->nama_fasilitas }}</td>
            <td>{{ $value->keterangan }}</td>
            <td>{{ $value->image }}</td>
            <td><a class="btn btn-info" href="/fhotel/{{ $value->id }}/edit">Edit</a></td>
            <td>
              <form action="{{ url('fhotel/'.$value->id) }}" method="POST">
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
  <!-- /.content -->    
@endsection