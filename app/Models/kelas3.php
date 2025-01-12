<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas3 extends Model
{
    /** @use HasFactory<\Database\Factories\Kelas3Factory> */
    use HasFactory;
    protected $fillable = [
        "name",
    ];
}
