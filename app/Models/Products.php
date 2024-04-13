<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    protected $fillable = [
        'name',
        'description',
        'price',
        'category_id',
        'image',
    ];
    
    use HasFactory;
}
