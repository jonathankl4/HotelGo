<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class PesanController extends Controller
{
    //

    public function pilihkamar(Request $req){

        $d1 = $req->dcheckin;
        $d2 = $req->dcheckout;
        $temp = strtotime($d1) - strtotime($d2);
        $diff = abs(round($temp / 86400));


        $ket = new stdClass();
        $ket->idkamar =$req->btnpilih;
        $ket->jkamar = $req->kamar;
        $ket->dcheckin = $req->dcheckin;
        $ket->dcheckout = $req->dcheckout;
        $ket->hari = $diff;
        $ket->tamu = $req->tamu;



        // dd($diff);

        $kamar = DB::table('kamar')->where('id','=',$ket->idkamar)->first();


        return view("user.pesankamar",["dk"=>$kamar , "detail"=>$ket]);

    }
}
