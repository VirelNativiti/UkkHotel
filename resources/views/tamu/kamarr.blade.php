@extends('layouts.main')

@section('konten')
<div class="container-fluid bannerkamar">
</div>
<div class="container-fluid mt-5 mb-5">
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ url('kamarr') }}">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            <input type="date" name="tgl_checkin" class="form-control" id="tgl_checkin">
                            <label for="floatingInputGrid">Tanggal Check In</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="date" name="tgl_checkout" class="form-control" id="tgl_checkin">
                            <label for="floatingInputGrid">Tanggal Check Out</label>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-floating">
                            <input type="number" name="jumlah_kamar" class="form-control" id="jumlah_kamar">
                            <label for="floatingInputGrid">jumlah Kamar</label>
                        </div>
                    </div>
                    <div class="col">
                        <p>
                            <button class="btn btn-primary mt-2" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2">Pesan</button>
                        </p>
                    </div>
                </div>

                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="form-group pl-4 mb-3">
                        <label>Nama Pemesan :</label>
                        <input type="text" name="nama_pemesan" class="form-control" required>
                    </div>
                    <div class="form-group pl-4 mb-3">
                        <label>Email :</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                    <div class="form-group pl-4 mb-3">
                        <label>No Handphone :</label>
                        <input type="number" name="no_handphone" class="form-control" required>
                    </div>
                    <div class="form-group pl-4 mb-3">
                        <label>Nama Tamu :</label>
                        <input type="text" name="nama_tamu" class="form-control" required>
                    </div>
                    <div class="form-group pl-4 mb-3">
                        <label>Tipe Kamar :</label>
                        <select name="tipe_kamar" id="tipe_kamar" class="form-control">
                            <option selected>Pilih Tipe Kamar</option>
                            <option value="1">Deluxe</option>
                            <option value="2">Superior</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary ml-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    $('.collapse').collapse()
</script>
@endsection
