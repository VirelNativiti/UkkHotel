@extends('layouts.master')

@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

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
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                    @foreach ($resepsionis as $r)
                    <tr>
                        <td>{{ $r->nama_tamu }}</td>
                        <td>{{ $r->tgl_checkin }}</td>
                        <td>{{ $r->tgl_checkout }}</td>
                        <td>
                        @if ($r->status == 'a')
                    <span class="badge badge-secondary">belum check-in</span>
                    @endif
                    @if ($r->status == 'b')
                    <span class="badge badge-success">sudah checkin</span></td>
                @endif
                @if ($r->status == 'c')
                <span class="badge badge-info">sudah checkout</span></td>
                @endif
                @if ($r->status == 'd')
                <span class="badge badge-secondary">selesai</span></td>
                @endif
                        </td>
                        
                        
                        <td>
                            @if($r->status == 'a')
                        <form action="/resepsionis/status/in/{{ $r->id }}" method="post">
                            {{ csrf_field() }}
                            <input class="btn btn-success" type="submit" value="check-in">
                        </form>
                        @endif
                        @if($r->status == 'b')
                        <form action="/resepsionis/status/out/{{ $r->id }}" method="post">
                            {{ csrf_field() }}
                            <input class="btn btn-danger" type="submit" value="check-out">
                        </form>
                        @endif
                        @if($r->status == 'a' || $r->status == 'b' || $r->status == 'c')
                        <form action="/resepsionis/status/batal/{{ $r->id }}" method="post">
                            {{ csrf_field() }}
                            <input class="btn btn-secondary" type="submit" value="selesai">
                        </form>
                        @endif


                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <a href="/resepsionis" class="btn btn-primary ml-5">Reset</a>
        </div>
    </div>
</section>

<!-- Main content -->
<section class="content">
</section>
<!-- /.content -->
@endsection
