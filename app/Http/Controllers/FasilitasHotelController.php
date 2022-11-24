<?php

namespace App\Http\Controllers;

use App\Models\FasilitasHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class FasilitasHotelController extends Controller
{
    //

    public function masterfasilitas(){
        $data = DB::table("fasilitas_hotel")->get();

        return view("admin.HMasterFasilitas" ,["data" => $data]);
    }

    public function tambahfasilitas(Request $req){

        if ($req->validate(
            [
                "fasilitas" => "required",


            ],
            [
                "required" => "Field diatas harus di isi !",


            ]
        )) {
            # code...

            $new = new FasilitasHotel();
            $new->nama_fasilitas = $req->fasilitas;
            $new->save();

            Alert::success("Berhasil", "Berhasil Tambah Fasilitas");
            return redirect("/admin/MasterFasilitas")->with("success", "Berhasil Tambah Kamar");


        }
    }

    public function deletefasilitas($id){

       
        $result = DB::table("fasilitas_hotel")->where("id",'=',$id)->delete();

        if ($result) {
            # code...
            Alert::success("success", "Berhasil Delete");
            return redirect()->back();
        }
    }
}
