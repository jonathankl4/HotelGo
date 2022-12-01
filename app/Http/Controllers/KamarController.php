<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\noKamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

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
                "hargakamar" => "required|integer|min:1",
                "foto1" => "required",


            ],
            [
                "required" => "Field diatas harus di isi !",
                "integer" => "Field diatas harus di isi angka"

            ]
        )) {
            # code...


            $foto1 = "";
            $foto2 = "";
            $foto3 = "";
            $foto4 = "";
            $namaFileGambar1  = "";
            $namaFileGambar2  = "";
            $namaFileGambar3  = "";
            $namaFileGambar4  = "";

            try {
                //code...
                $foto1 = $req->file("foto1");
                $namaFileGambar1  = Str::random(8).".".$foto1->getClientOriginalExtension();
            } catch (\Throwable $th) {
                //throw $th;
            }

            try {
                //code...
                $foto2 = $req->file("foto2");
                $namaFileGambar2  = Str::random(8).".".$foto2->getClientOriginalExtension();
            } catch (\Throwable $th) {
                //throw $th;
            }

            try {
                //code...
                $foto3 = $req->file("foto3");
                $namaFileGambar3  = Str::random(8).".".$foto3->getClientOriginalExtension();
            } catch (\Throwable $th) {
                //throw $th;
            }
            try {
                //code...
                $foto4 = $req->file("foto4");
                $namaFileGambar4  = Str::random(8).".".$foto4->getClientOriginalExtension();
            } catch (\Throwable $th) {
                //throw $th;
            }




            $nk = new Kamar();
            $nk->nama_kamar = $req->namakamar;
            $nk->tipe_kamar = $req->tipekamar;
            $nk->jumlah_kamar = $req->jumlahkamar;
            $nk->jumlah_penghuni = $req->jumlahpenghuni;
            $nk->tipe_ranjang = $req->tiperanjang;
            $nk->harga_kamar = $req->hargakamar;
            $nk->foto1 = $namaFileGambar1;
            $nk->foto2 = $namaFileGambar2;
            $nk->foto3 = $namaFileGambar3;
            $nk->foto4 = $namaFileGambar4;
            $nk->save();

            $kode = strtoupper(substr($req->namakamar, 0, 4));

            $kode = $kode.$nk->id;


            $namaFolderPhoto = "gambar/";
            // storeAs akan menyimpan default ke local
            try {
                //code...
                $foto1->storeAs($namaFolderPhoto,$namaFileGambar1, 'public');
            } catch (\Throwable $th) {
                //throw $th;
            }
            try {
                //code...
                $foto2->storeAs($namaFolderPhoto,$namaFileGambar2, 'public');
            } catch (\Throwable $th) {
                //throw $th;
            }
            try {
                //code...
                $foto3->storeAs($namaFolderPhoto,$namaFileGambar3, 'public');
            } catch (\Throwable $th) {
                //throw $th;
            }
            try {
                //code...
                $foto4->storeAs($namaFolderPhoto,$namaFileGambar4, 'public');
            } catch (\Throwable $th) {
                //throw $th;
            }


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


    public function DetailKamar($id){

        $data = DB::table("kamar")->where("id",'=',$id)->first();

        return view("admin.detailkamar", ["data"=> $data]);

    }
}
