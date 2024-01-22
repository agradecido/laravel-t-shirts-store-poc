<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $fillable = [
        'slug',
        'name',
        'RGB',
    ];

    protected $keyType = 'string';
    protected $primaryKey = 'slug';
}

