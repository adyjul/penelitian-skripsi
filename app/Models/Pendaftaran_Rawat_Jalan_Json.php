<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran_Rawat_Jalan_Json extends Model
{
    use HasFactory;
    protected $table = 'pendaftaran_rawat_jalan_jsons';
    protected $casts = [
        'data' => 'array',
        'tarif' => 'array',
        'potongan_tarif' => 'array'
    ];
}
