<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class pesantren extends Model
{
    /** @use HasFactory<\Database\Factories\PesantrenFactory> */
    use HasFactory;

    protected $fillable=[
        'nama',
    ];

    public function kawasan()
    {
    return $this->hasMany(kawasan::class);
    }

    public function user()
    {
    return $this->hasMany(User::class);
    }

    public function detail()
    {
        return $this->morphOne(alamat_table::class, 'alamattable');
    }
}
