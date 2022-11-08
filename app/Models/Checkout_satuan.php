<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout_satuan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function paket_satuan(){
        return $this->belongsTo(Paket_satuan::class);
    }
}
