<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desa extends Model
{
    /** @use HasFactory<\Database\Factories\DesaFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'kota_id',
    ];
}
