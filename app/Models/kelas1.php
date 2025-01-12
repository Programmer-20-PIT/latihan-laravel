<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class kelas1 extends Model
{
    /** @use HasFactory<\Database\Factories\Kelas1Factory> */
    use HasFactory;
    protected $fillable = [
        "name",
        "kelas3_id",
        "kelas2_id",
    ];

public function kelas2():BelongsTo{
    return $this->belongsTo(Kelas2::class);
}
}