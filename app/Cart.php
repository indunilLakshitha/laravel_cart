<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'customer_id',
        'product_id',
        'qty',
        'total',
        'status'
    ];
}
