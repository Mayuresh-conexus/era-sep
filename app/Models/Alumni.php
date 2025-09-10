<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'batch_year',          // e.g., 2005
        'department',          // e.g., Computer Science
        'degree',              // e.g., B.Sc, MBA
        'passing_year',        // e.g., 2008
        'address',             // full address
        'city',
        'state',
        'country',
        'current_job_title',   // e.g., Software Engineer
        'company',             // e.g., Google
        'linkedin_url',
        'profile_photo',       // path to uploaded photo
        'bio',                 // short introduction
        'status',              // active/inactive
    ];
}
