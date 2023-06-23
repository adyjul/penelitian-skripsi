<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranRawatJalanJsonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_rawat_jalan_jsons', function (Blueprint $table) {
            $table->id();
            $table->char('kode_booking',100);
            $table->smallInteger('jenis');
            $table->json('data');
            $table->json('tarif');
            $table->json('potongan_tarif');
            $table->dateTime('status_bayar');
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
        Schema::dropIfExists('pendaftaran_rawat_jalan_jsons');
    }
}
