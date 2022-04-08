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

    public function checkin($id) {

        DB::table('kamarr')->where('id', $id)->update([
            'status' => 'b'

        ]);

        return redirect()->route('resepsionis');
    }
    public function checkout($id) {

        DB::table('kamarr')->where('id', $id)->update([
            'status' => 'c'

        ]);

        return redirect()->route('resepsionis');
    }

    
    public function batalkan($id)
    {
        
        
        $tipe = DB::table('kamarr')->where('id', $id)->value('tipe_kamar');
        
        $jumlah_res = DB::table('kamarr')->where('id', $id)->value('jumlah_kamar');
        
        $jumlah = DB::table('dkamars')->where('tipe_kamar', $tipe)->value('jumlah_kamar'); 

        $akhir = $jumlah + $jumlah_res;

        // dd($jumlah);
        
        // $jml_kamar = DB::table('dkamar')->where('id', $id)->value('jumlah_kamar');
        
        DB::table('dkamars')->where('tipe_kamar', $tipe)->update([
            'jumlah_kamar' => $akhir
        ]);

        DB::table('kamarr')->where('id', $id)->update([
            'status' => 'd'
        ]);

        // $reservasi = DB::table('tb_reservasi')->get();

        // return view('resepsionis.dashboard', ['reservasi' => $reservasi]);

        return redirect()->route('resepsionis');
    }
}
