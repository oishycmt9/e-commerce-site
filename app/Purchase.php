<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'product_id',
        'quantity',
        'purchase_price',
        'regular_price',
        'sell_price',
        'supplier_id',
        'status'
    ];
}
