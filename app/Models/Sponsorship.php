<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    protected $fillable = [
        'email', 'contact_no', 'date', 'sponsorship',
        'no_of_participants', 'photos_videos', 'cost'
    ];

    protected $casts = [
        'photos_videos' => 'array',
        'date' => 'date',
    ];

    public function sponsors()
    {
        return $this->hasMany(SponsorshipSponsor::class);
    }
}
