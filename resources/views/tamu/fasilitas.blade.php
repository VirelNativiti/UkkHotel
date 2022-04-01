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
</div> <br> 
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
   @foreach ($image as $i)
    <br>
    <div class="row-md-3">
        <div class="col">
            <div class="card shadow-sm" style="border-color : black; border-radius : 20px">
                <img src="img/{{ $i->image }}" class="img-thumbnail" style="border-radius: 20px;
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
</div>
<br>    
@endsection