<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'id','parent_category_id');
    }
}
