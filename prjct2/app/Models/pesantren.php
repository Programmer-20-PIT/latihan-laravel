<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesantren extends Model
{
    /** @use HasFactory<\Database\Factories\PesantrenFactory> */
    use HasFactory;
    

    protected $fillable = [
        'name',
        'kota_id',
        'jmlh_santri',
        'web',
        'email',
        'phone',
        'address',
    ];
}
