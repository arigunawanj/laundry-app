<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket_kilo extends Model
{
    use HasFactory;
    protected $table = 'paket_kilos';
    protected $fillable= [
        'kd_paketkilo',
        'nama_paketkilo',
        'hari_paketkilo',
        'min_berat_paket',
        'antar_berat_paket'
    ];

    protected $guarded= [
        'id'
    ];
}
