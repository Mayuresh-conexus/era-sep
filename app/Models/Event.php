<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'location',
        'description',
        'organised_by',
        'sponsored_by',
        'conducted_by',
        'participants',
        'photos',
        'videos',
        'registration_fee',
    ];

    // Cast JSON fields
    protected $casts = [
        'date' => 'date',
        'photos' => 'array',
        'videos' => 'array',
    ];
}
