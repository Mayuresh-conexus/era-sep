<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SponsorshipSponsor extends Model
{
    protected $fillable = ['sponsorship_id', 'sponsor_name'];

    public function sponsorship()
    {
        return $this->belongsTo(Sponsorship::class);
    }
}

