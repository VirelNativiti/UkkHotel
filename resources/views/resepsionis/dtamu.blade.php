@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="ml-3">Data Tamu</h1> 
                <div class="row">
                    <form action="{{ route('resepsionis.filter') }}" method="POST">
                    @csrf
                        <div class="form-floating ml-4">
                            <input type="date" name="filter" class="form-control" id="filter">
                            <button type="submit" class="btn btn-primary ml-4">Filter</button>
                        </div><br>
                    </form>
                    <form action="{{ route('resepsionis.search') }}" method="POST">
                    @csrf
                        <div class="form-floating ml-4">
                            <input type="text" name="search" class="form-control" id="search" placeholder="Nama Tamu">
                            <button type="submit" class="btn btn-primary ml-4">Cari</button>
                        </div><br>
                    </form>
                </div>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                </ol>
            </div>
            
            <div class="col-sm-6">
                <table class="table-bordered table ml-4">
                    <tr>
                        <th>Nama Tamu</th>
                        <th>Tanggal Check In</th>
                        <th>Tanggal Check Out</th>
                    </tr>
                    @foreach ($resepsionis as $r)
                    <tr>
                        <td>{{ $r->nama_tamu }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>{{ $r->tgl_checkout }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

</section>
<!-- /.content -->
@endsection
