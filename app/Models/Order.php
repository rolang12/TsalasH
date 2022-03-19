<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'users_id',
        'products_id'
    ];


    public function productOrder() {

        return $this->hasMany(ProductOrder::class, 'orders_id');

    }

    public function user() {

        return $this->belongsTo(User::class, 'users_id');

    }

    public function product() {

        return $this->hasMany(Product::class, 'products_id');
    }

}
