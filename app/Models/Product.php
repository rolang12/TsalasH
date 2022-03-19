<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'amount',
        'stock_min',
        'categories_id'
    ];

    public function productOrder() {
        
        return $this->hasMany(ProductOrder::class, 'product_orders_id');

    }

    public function category() {
        
        return $this->belongsTo(Category::class, 'categories_id');

    }
}
