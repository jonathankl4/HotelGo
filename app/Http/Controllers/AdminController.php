<?php

namespace App\Http\Controllers;

use App\Models\HTrans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    //


    public function pesanan(){
        $data = DB::select("SELECT ht.id as orderid, ht.nama_pemesan as namapemesan , k.nama_kamar as namakamar ,ht.checkin as checkin , ht.checkout as checkout , ht.total as total  FROM h_trans ht join kamar k on ht.idkamar = k.id where ht.status_trans='pending' ");
        // dd($data);
        $j = "";
        if (count($data)> 0) {
            # code...
            $j = DB::table("d_trans")->where("idhtrans", '=', $data[0]->orderid)->get();
        }




        return view("admin.Hpesanan",["data"=>$data, "jumlah"=>$j]);
    }


    public function selesaikanpesanan($id){


        $ht = HTrans::find($id);
        $ht->status_trans = "selesai";
        $ht->save();

        $dt = DB::table("d_trans")->where("idhtrans",'=',$id)->get();
        // dd($dt);

        for ($i=0; $i < count($dt); $i++) {
            # code...
            $update = DB::table("no_kamar")->where("kode_kamar",'=',$dt[$i]->d_kode_kamar)->update(["status_kamar"=>"kosong"]);
        }

        Alert::success("Berhasil", "Berhasil selesaikan pesanan");
        return redirect()->back();


    }

    public function laporanpendapatan(){


        $data = [];

        return view("admin.HlaporanPendapatan", ["data"=>$data]);

    }
    public function Flaporanpendapatan(Request $req){


        $data = DB::table("h_trans")->where("status_trans",'=','selesai')->where("tgltrans",'>=',$req->tgl1)->where("tgltrans",'<=',$req->tgl2)->get();

        $total = 0;

        for ($i=0; $i < count($data) ; $i++) {
            # code...
            $total += $data[$i]->total;
        }
        return view("admin.HlaporanPendapatan", ["data"=>$data,"total"=>$total]);

    }
}
