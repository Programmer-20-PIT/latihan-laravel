<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cihuy extends Model
{
    /** @use HasFactory<\Database\Factories\CihuyFactory> */
    use HasFactory;
    protected $fillable = [
        'name',
        'jumlah_orang',
        'jumlah',
        'email',
        'web',
        'phone'
    ];
}