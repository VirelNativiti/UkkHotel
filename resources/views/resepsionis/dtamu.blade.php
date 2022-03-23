@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
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
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

</section>
<!-- /.content -->
@endsection
