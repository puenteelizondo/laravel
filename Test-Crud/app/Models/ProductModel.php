<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = "products"; // Define la tabla si el nombre no sigue la convención de Laravel
    protected $fillable = [
        'name',
        'description',
        'skuNumber',
        'category',
        'supplier',
        'numberAvailable',
        'price'
    ];
}
