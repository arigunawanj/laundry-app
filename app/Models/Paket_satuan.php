<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket_satuan extends Model
{
    use HasFactory;

    protected $table = 'paket_satuans';
    protected $fillable= [
        'kd_paketsatuan',
        'nama_paketsatuan',
        'ket_paketsatuan',
        'harga_paketsatuan',
        'outlet_id'
    ];

    protected $guarded= [
        'id'
    ];
}
