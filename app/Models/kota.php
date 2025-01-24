<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kota extends Model
{
    /** @use HasFactory<\Database\Factories\KotaFactory> */
    use HasFactory;
    protected $fillable =[
        'nama',
        'provinsi_id,'
    ];
    public function provinsi()
        {
        return $this->belongsTo(provinsi::class);
        }

    public function kecamatan()
    {
        return $this->hasMany(kecamatan::class);
    }

}


