<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\VersionUpdater\Checker;

class Paket_satuan extends Model
{
    use HasFactory;

    protected $guarded= ['id'];

    public function ck_satuan(){
        return $this->hasOne(Checkout_satuan::class);
    }

    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }
}
