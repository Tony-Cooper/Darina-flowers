<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $casts = [
        'id' => 'integer',
    ];

    public function product() {
        return $this->belongsToMany(Product::class);
    }
}
