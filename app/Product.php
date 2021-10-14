<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'id',
      'name',
        'description',
      'category_id',
        'brand_id',
        'supplier_id',
        'unit',
        'image',
        'status'
    ];
}
