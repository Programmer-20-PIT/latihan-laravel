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
        'negara_id',
        'kota_id',
    ];

    public function kota(): BelongsTo
    {
        return $this->belongsTo(kota::class) ;
    }
}
