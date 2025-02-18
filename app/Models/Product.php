<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
 
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'discount_price',
        'quantity',
        'sku',
        'image',
        'category_id',
        'brand',
        'status',
    ];

    public function category()
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }

}
