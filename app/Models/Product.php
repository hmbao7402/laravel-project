<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 
        'desc', 
        'price', 
        'status', 
        'avg_rating',
        'styleID', 
        'typeID', 
        'collectionID'
    ];

    public function images() {
        return $this->hasMany(ProductImages::class);
    }
}
