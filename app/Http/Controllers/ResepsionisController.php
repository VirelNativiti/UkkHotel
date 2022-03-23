<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResepsionisController extends Controller
{
    public function index(){
        $resepsionis = DB::table('kamarr')->get();
        
        return view('resepsionis.dtamu', [
            "title" => "Resepsionis",
            "resepsionis" => $resepsionis
        ]);
    }
}
