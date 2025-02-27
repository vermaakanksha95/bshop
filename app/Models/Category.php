<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_category_id',
        'name',
        'image',
        'cat_description',
        'cat_slug',
        'status',
    ];

    public function parentCategory(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'parent_category_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_category_id');
    }

    public function products():HasMany
    {
        return $this->hasMany(Product::class);
    }
}
