<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StockEntry extends Model
{
    protected $fillable = [
        'id',
        'product_id', //foreign key
        'supplier_id', //foreign key
        'quantity', //int
        'delivery_reference' //unique
    ];
}
