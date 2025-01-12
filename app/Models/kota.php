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
        'negara_id'
    ];

    public function pesantrens(): HasMany
    {
        return $this->hasMany(pesantren::class);
    }
}


