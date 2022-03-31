@extends('layouts.main')

@section('konten')
<style>
    .img-thumbnail{
        width: 400px;
        height: 400px;
    }
    .card{
        width: 400px;
    }
</style>
<!-- Title  -->
<div class="container-fluid banner">
    <div class="container banner-content col-lg-6">
        <div class="text-center">
            <header class="masthead text-center text-white">
                <div class="masthead-content">
                    <div class="container px-5">
                        <h1 class="masthead-heading mb-0">Facility</h1>
                    </div>
                </div>
            </header>
        </div>
    </div>
</div>  
<!-- End of Title -->
@foreach ($image as $i)
    <!-- <img src="img/{{ $i->image }}" alt="" height="100" width="100"> -->
                    <div class="row-md-3">
                        <div class="col">
                            <div class="card mb-4 shadow-sm" style="border: 2px solid; border-color : #ef95b1; border-radius : 20px">
                                <img width="100%" height="225" src="img/{{ $i->image }}" class="img-thumbnail" style="border-radius: 20px;
                                border-bottom-right-radius: unset;
                                border-bottom-left-radius: unset; padding : 0px" />
                                <div class="card-body">
                                    <h4 class="display-6">{{ $i->nama_fasilitas }}</h4>
                                    <p class="card-text">{{ $i->keterangan }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
@endforeach
@endsection