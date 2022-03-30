@extends('layouts.main')

@section('konten')
        <table class="table-bordered table ml-4">
          <tr>
            <th>Guest name</th>
            <th>Check in</th>
            <th>Check out</th>
            <th>Room type</th>
            <th>Number of rooms</th>
            <th colspan="2">Aksi</th>
          </tr>
          @foreach ($cetak as $key=>$value)
          <tr>
            <td><div>{{ $value->nama_tamu }}</div></td>
            <td><div>{{ $value->tgl_checkin }}</div</td>
            <td><div>{{ $value->tgl_checkout }}</div></td>
            <td><div>{{ $value->tipe_kamar}}</div></td>
            <td><div>{{ $value->jumlah_kamar }}</div></td>
            <td>
                <form action="{{ route('pemesanan', $value->id) }}" method="POST"  target="_blank">
                    @csrf
                    <button type="submit" class="btn btn-warning">Cetak</button>
                </form>
            </td>
          </tr>
          @endforeach
        </table>
@endsection