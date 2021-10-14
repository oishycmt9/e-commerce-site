<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $fillable = [
        'name',
        'description',
        'contact',
        'email',
        'address',
        'website',
        'profile_picture',
        'city',
        'postal_code',
        'country',
        'status'
    ];
}
