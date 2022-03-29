@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <h1 style="margin-left: 30px;">Data Tamu</h1> 
        <div class="row mb-2 ml-3">
                    <form action="{{ route('resepsionis.filter') }}" method="POST">
                    @csrf
                        <div class="form-floating ml-3">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="date" name="filter" class="form-control" id="filter">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                        </div><br>
                    </form>
                    <form action="{{ route('resepsionis.search') }}" method="POST">
                    @csrf
                        <div class="form-floating ml-3">
                            <div class="row">
                                <div class="col-sm-8">
                                    <input type="text" name="search" class="form-control" id="search" placeholder="Nama Tamu">
                                </div>
                                <div class="col">
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </div>
                        </div><br>
                    </form>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
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
    </div>
    <a href="/resepsionis" class="btn btn-primary ml-4">Reset</a>
</section>

<!-- Main content -->
<section class="content">
</section>
<!-- /.content -->
@endsection
