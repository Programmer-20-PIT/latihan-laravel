<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class negara extends Model
{
    /** @use HasFactory<\Database\Factories\Project1Factory> */
    use HasFactory;

    protected $fillable = [

        'name'
    ];
}
