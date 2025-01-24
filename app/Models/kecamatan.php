<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kecamatan extends Model
{
    /** @use HasFactory<\Database\Factories\KecamatanFactory> */
    use HasFactory;

    protected $fillable=[
        'nama',
        'kota_id',
    ];

    public function desa()
    {
        return $this->hasMany(desa::class);
    }

    public function kota()
    {
    return $this->belonsTo(kota::class);
    }
}
