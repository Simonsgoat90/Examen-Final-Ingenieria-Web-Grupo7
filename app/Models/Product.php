<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_code',
        'product_name',
        'product_price',
        'product_amount',
        'product_description',
    ];

    public function sales() {
        return $this->hasMany(Sale::class, 'id_product');
    }
}
