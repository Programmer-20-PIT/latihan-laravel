<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamat extends Model
{
    /** @use HasFactory<\Database\Factories\AlamatFactory> */
    use HasFactory;

    protected $fillable=[
        'detail',
        'desa_id',
    ];


    public function desa()
    {
    return $this->belongsTo(desa::class);
    }

    public function kawasan()
    {
        return $this->morphedByMany(kawasan::class, 'alamat_table');
    }
    public function pesantren()
    {
        return $this->morphedByMany(pesantren::class, 'alamat_table');
    }
    public function user()
    {
        return $this->morphedByMany(User::class, 'alamat_table');
    }
}
