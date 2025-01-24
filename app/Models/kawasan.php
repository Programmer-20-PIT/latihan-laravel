<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kawasan extends Model
{
    /** @use HasFactory<\Database\Factories\KawasanFactory> */
    use HasFactory;

    protected $fillable =[
        'pesantren_id' ,
        'nama',
    ];

    public function pesantren()
    {
        return $this->belongsTo(pesantren::class);
    }

    public function alamat()
    {
        return $this->morphToMany(alamat::class,'alamat_table');
    }
    public function detail()
    {
        return $this->morphOne(alamat_table::class, 'alamat_table');
    }
}
