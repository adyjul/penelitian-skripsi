<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranRawatJalanNonJsonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_rawat_jalan_non_jsons', function (Blueprint $table) {
            $table->id();
            $table->char('kode_booking',100);
            $table->smallInteger('jenis');
            $table->smallInteger('shift');
            $table->smallInteger('status_tujuan');
            $table->smallInteger('tindakan_khusus');
            $table->smallInteger('penjamin');
            $table->smallInteger('status_checkup');
            $table->text('keterangan');
            $table->integer('no_daftar');
            $table->string('kode_pendaftaran',100);
            $table->string('tarif_pendaftaran',200);
            $table->string('tarif_dokter',200);
            $table->string('potongan_pendaftaran',200);
            $table->string('potongan_dokter',200);
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
        Schema::dropIfExists('pendaftaran_rawat_jalan_non_jsons');
    }
}
