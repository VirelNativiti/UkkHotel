<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function index(){
        return view('tamu.fasilitas', [
            "title" => "Facility"
        ]);
    }
}
