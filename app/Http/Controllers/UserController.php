<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //

    public function MasterUser(){

        $data = DB::table("users")->get();

        return view("admin.HMasterUser",["data"=> $data]);
    }

    public function riwayatpesanan(){

        $userLog = Session::get("userLog");
        $data = DB::select("SELECT ht.id as orderid, ht.nama_pemesan as namapemesan , k.nama_kamar as namakamar ,ht.checkin as checkin , ht.checkout as checkout , ht.total as total  FROM h_trans ht join kamar k on ht.idkamar = k.id where ht.iduser = $userLog->id and ht.status_trans='pending' ");
        $j = "";
        if (count($data)> 0) {
            # code...
            $j = DB::table("d_trans")->where("idhtrans", '=', $data[0]->orderid)->get();
        }
        // dd($j);




        return view("user.pesanan",["data"=>$data, "jumlah"=>$j]);
    }

}
