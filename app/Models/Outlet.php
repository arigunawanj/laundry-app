<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $fillable = [
            'nama_outlet',
            'alamat_outlet',
            'telepon_outlet',
            'email_outlet',
            'upload'
    ];

    protected $guarded = ['id'];
}
