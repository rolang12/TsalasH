<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sabor extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'sabor_selected',
    ];

    public function product() {
        
        return $this->belongsTo(Product::class);

    }

}
