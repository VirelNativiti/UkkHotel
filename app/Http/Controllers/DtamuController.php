<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DtamuController extends Controller
{
    public function index(){
        return view('resepsionis.dtamu', [
            "title" => "Data Tamu"
        ]);
    }
}
