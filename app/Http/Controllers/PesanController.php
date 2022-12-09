<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use stdClass;

class PesanController extends Controller
{
    //

    public function pilihkamar(Request $req){

        $userlog = Session::get("userLog");
        $d1 = $req->dcheckin;
        $d2 = $req->dcheckout;
        $temp = strtotime($d1) - strtotime($d2);
        $diff = abs(round($temp / 86400));

        if ($d1 == ""|| $d2 == "" || $req->kamar == "" || $req->tamu == "") {
            # code...
            Alert::warning("Info", "isi semua keterangan checkin");
            return redirect()->back();
        }



        $kamar = DB::table('kamar')->where('id','=',$req->btnpilih)->first();
        $ttl = ($req->kamar*$kamar->harga_kamar)*$diff;
        $ket = new stdClass();
        $ket->idkamar =$req->btnpilih;
        $ket->jkamar = $req->kamar;
        $ket->dcheckin = $req->dcheckin;
        $ket->dcheckout = $req->dcheckout;
        $ket->hari = $diff;
        $ket->tamu = $req->tamu;
        $ket->total = $ttl;

        Session::put("datapesanan", $ket);

        // dd($diff);



        return view("user.pesankamar",["dk"=>$kamar , "detail"=>$ket, "userLog"=>$userlog]);

    }

    public function pembayaran(Request $req){
        dd($req);

    }
}
