<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\noKamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KamarController extends Controller
{
    //

    public function MasterKamar(){
        $data = DB::table('kamar')->get();

        return view("admin.HMasterKamar",["data"=>$data]);
    }

    public function tambahkamar(Request $req){

        if ($req->validate(
            [
                "namakamar" => "required",
                "jumlahkamar" => "required|integer|min:1",
                "jumlahpenghuni" => "required|integer|min:1",
                "hargakamar" => "required|integer|min:1"

            ],
            [
                "required" => "Field diatas harus di isi !",
                "integer" => "Field diatas harus di isi angka"

            ]
        )) {
            # code...
            $nk = new Kamar();
            $nk->nama_kamar = $req->namakamar;
            $nk->tipe_kamar = $req->tipekamar;
            $nk->jumlah_kamar = $req->jumlahkamar;
            $nk->jumlah_penghuni = $req->jumlahpenghuni;
            $nk->tipe_ranjang = $req->tiperanjang;
            $nk->harga_kamar = $req->hargakamar;
            $nk->save();

            $kode = strtoupper(substr($req->namakamar, 0, 4));

            $kode = $kode.$nk->id;


            for ($i=0; $i < $req->jumlahkamar ; $i++) {
                # code...
                $nok = new noKamar();
                $nok->idkamar = $nk->id;
                $nok->kode_kamar = $kode.$i;
                $nok->save();

            }

            Alert::success("Berhasil", "Berhasil Tambah Kamar");
            return redirect("/admin/MasterKamar")->with("success", "Berhasil Tambah Kamar");


        }
    }
}
