<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'alt_phone',
        'address_type',
        'landmark',
        'street',
        'area',
        'address_line',
        'city',
        'state',
        'postal_code',
        'status',
    ];
    protected $casts = [
        'status' => 'boolean', // Cast 'status' to boolean
    ];

    /**
     * Get the user that owns the address.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
