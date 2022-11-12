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
        'harga_paketkilo',
        'hari_paketkilo',
        'min_berat_paket',
        'antar_jemput_paket',
        'outlet_id'
    ];

    protected $guarded= [
        'id'
    ];

    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }
}
