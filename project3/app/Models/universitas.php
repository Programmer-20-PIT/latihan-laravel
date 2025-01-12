<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class universitas extends Model
{
    /** @use HasFactory<\Database\Factories\UniversitasFactory> */
    use HasFactory;

    protected $fillable = [
        'nama',
        'desa_id',
        'jumlah_siswa',
        'web',
        'email',
        'phone',
        'address',
    ];
}
