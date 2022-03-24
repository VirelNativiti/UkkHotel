<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DtamuController extends Controller
{
    public function index(){
        return view('resepsionis.dtamu', [
            "title" => "Data Tamu"
        ]);
    }
    public function filter(Request $request){
        // dd($request);

       $user = DB::table('kamarr')->where('tgl_checkin', $request->filter)->get();

        return view('resepsionis.dtamu', [
            "title" => "Data Tamu",
            "resepsionis" => $user,
        ]);
    }
    public function search(Request $request){
        // dd($request);

       $user = DB::table('kamarr')->where('nama_tamu', $request->search)->get();

        return view('resepsionis.dtamu', [
            "title" => "Data Tamu",
            "resepsionis" => $user,
        ]);
    }
}
