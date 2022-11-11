<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Outlet extends Model
{
    use HasFactory;

    protected $fillable = [
            'nama_outlet',
            'alamat_outlet',
            'telepon_outlet',
            'email_outlet',
            'upload',
            'kecamatan',
            'kelurahan'
    ];

    protected $guarded = ['id'];
    
    public function user_outlets()
    {
        return $this->hasMany(user_outlets::class);
    }

    public function Paket_satuan()
    {
        return $this->hasMany(Paket_satuan::class);
    }
    
}
