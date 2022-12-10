<?php

namespace Database\Seeders;

use App\Models\FasilitasHotel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FasilitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $n = new FasilitasHotel();
        $n->nama_fasilitas = "Restoran";
        $n->save();

        $n = new FasilitasHotel();
        $n->nama_fasilitas = "WiFi";
        $n->save();

        $n = new FasilitasHotel();
        $n->nama_fasilitas = "Lift";
        $n->save();

        $n = new FasilitasHotel();
        $n->nama_fasilitas = "Parkiran Luas";
        $n->save();

        $n = new FasilitasHotel();
        $n->nama_fasilitas = "AC";
        $n->save();

        $n = new FasilitasHotel();
        $n->nama_fasilitas = "Ruang Rapat";
        $n->save();
    }
}
