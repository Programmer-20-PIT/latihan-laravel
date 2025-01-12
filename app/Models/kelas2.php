<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class kelas2 extends Model
{
    /** @use HasFactory<\Database\Factories\Kelas2Factory> */
    use HasFactory;

    protected $fillable = [
        "name",
        "kelas3_id",
    ];

public function kelas2():HasMany{
    return $this->hasMany(kelas3::class);
}
}
