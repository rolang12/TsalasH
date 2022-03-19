<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaborStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'sabor'
    ];
}
