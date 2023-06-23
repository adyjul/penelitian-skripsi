<?php

namespace Database\Seeders;

use App\Models\Pendaftaran_Rawat_Jalan_Json;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PendafataranRawatJalanJsonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     private function randomString($value){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = array();
        for ($i = 0; $i < $value; $i++) {
            array_push($randstring,$characters[rand(0, 61)]);
        }

        $implode_string = implode(',',$randstring);
        return str_replace(',','',$implode_string);
    }

    public function run()
    {
        // $query = Pendaftaran_Rawat_Jalan_Json::query()->create([
        //     'kode_booking' => $this->randomString(5),
        //     'jenis' => rand(1,2),
        //     'data' => [
        //         'shift' => rand(1,3),
        //         'status_tujuan' => rand(1,4),
        //         'tindakan_khusus' => rand(1,5),
        //         'penjamin' => rand(1,20),
        //         'status_checkup' => rand(1,2),
        //         'keterangan' => 'cukup',
        //         'no_daftar' => rand(110,240),
        //         'kode_pendaftaran' => $this->randomString(4),
        //     ],
        //     'tarif' => [
        //         "pendaftaran" => rand(20000,100000),
        //         "dokter" => rand(20000,100000),
        //     ],
        //     'potongan_tarif' => [
        //         "pendaftaran" => rand(20000,100000),
        //         "dokter" => rand(20000,100000),
        //     ],
        //     'status_bayar' => Carbon::now()
        // ])->toSql();

        // dd($query);

        for ($i=0; $i < 10000; $i++) {
            Pendaftaran_Rawat_Jalan_Json::create([
                'kode_booking' => $this->randomString(5),
                'jenis' => rand(1,2),
                'data' => [
                    'shift' => rand(1,3),
                    'status_tujuan' => rand(1,4),
                    'tindakan_khusus' => rand(1,5),
                    'penjamin' => rand(1,20),
                    'status_checkup' => rand(1,2),
                    'keterangan' => 'cukup',
                    'no_daftar' => rand(110,240),
                    'kode_pendaftaran' => $this->randomString(4),
                ],
                'tarif' => [
                    "pendaftaran" => rand(20000,100000),
                    "dokter" => rand(20000,100000),
                ],
                'potongan_tarif' => [
                    "pendaftaran" => rand(20000,100000),
                    "dokter" => rand(20000,100000),
                ],
                'status_bayar' => Carbon::now()
            ]);

        }
    }
}
