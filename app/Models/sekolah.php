<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sekolah extends Model
{
    /** @use HasFactory<\Database\Factories\SekolahFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'kota_id',
    ] ;
}
