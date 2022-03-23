<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WkamarController extends Controller
{
    public function index(){
        return view('tamu.kamarr', [
            "title" => "Kamar"
        ]);
    }
}
