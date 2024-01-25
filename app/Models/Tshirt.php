<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Tshirt extends Pivot
{
    protected $table = 'tshirts';

    protected $fillable = [
        'SKU',
        'name',
        'color',
        'stock',
        'stamp',
    ];

    protected $keyType = 'string';

    protected $primaryKey = 'SKU';

    public $timestamps = false;
}
