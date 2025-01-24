<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alamat_table extends Model
{
    /** @use HasFactory<\Database\Factories\AlamatTableFactory> */
    use HasFactory;

    protected $fillable=[

        'alamat_id',
        'alamat_table_id',
        'alamat_table_type',
    ];

    public function alamat_table()
    {
        return $this->morphTo();
    }
}
