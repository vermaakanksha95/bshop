<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
 
{
    use HasFactory;
    
    protected $guarded = [];
    public function category()
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }
    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }


}
