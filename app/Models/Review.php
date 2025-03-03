<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
use HasFactory;

/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
'name', // Reviewer's name
'rating', // Rating (e.g., 1 to 5)
'review', // Review text
];

/**
* The attributes that should be cast.
*
* @var array
*/
protected $casts = [
'rating' => 'integer', // Ensure rating is treated as an integer
];
}