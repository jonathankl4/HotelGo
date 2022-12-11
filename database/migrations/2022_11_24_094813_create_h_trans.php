<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('h_trans', function (Blueprint $table) {
            $table->id();
            $table->integer("iduser");
            $table->integer("idkamar");
            $table->date("checkin");
            $table->date("checkout");
            $table->integer("total");
            $table->string("metode_pembayaran");
            $table->string("nama_pemesan");
            $table->string("nomor_pemesan");
            $table->string("email");
            $table->string("status_trans");
            $table->date("tgltrans");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('h_trans');
    }
};
