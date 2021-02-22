<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $casts = [
        'id' => 'integer',
    ];

    public function images() {
        return $this->hasMany(ProductImage::class);
    }

    public function category() {
        return $this->belongsToMany(Category::class);
    }
}
