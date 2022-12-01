<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    //

    public function pilihkamar(Request $req){

        $idkamar = $req->btnpilih;
        $jkamar = $req->kamar;

        $kamar = DB::table('kamar')->where('id','=',$idkamar)->first();


        return view("user.pesankamar",["dk"=>$kamar , "jkamar"=> $jkamar]);

    }
}
