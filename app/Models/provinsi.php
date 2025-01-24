<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provinsi extends Model
{
    /** @use HasFactory<\Database\Factories\ProvinsiFactory> */
    use HasFactory;

    protected $fillable=[
        "nama",
        "negara_id",
    ];


public function kota()
    {
        return $this->hasMany(kota::class);
    }

public function negara()
    {
        return $this->belongsTo(negara::class);
    }
}
