<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumni extends Model
{
    use HasFactory;

    protected $fillable = [
    'first_name','last_name','email','phone','gender','date_of_birth',
    'association','title','maiden_name','mobile_country_code','mobile_number',
    'whatsapp_country_code','whatsapp_number','residential_number',
    'address','city','state','country','passing_year',
    'employment_status','company','job_title','industry','linkedin_url',
    'status','bio','profile_photo','interests','communication_preferences','verify_info' ,'agree_terms' ,'consent_communications',
];

protected $casts = [
    'interests' => 'array',
    'communication_preferences' => 'array',
    'verify_info' => 'boolean',
    'agree_terms' => 'boolean',
    'consent_communications' => 'boolean',
    'date_of_birth' => 'date',
    'status' => 'boolean',
];



}
