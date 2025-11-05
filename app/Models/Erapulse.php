<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Erapulse extends Model
{
    use HasFactory;

    // Mass assignable fields
    protected $fillable = [
        'title',
        'slug',
        'featured_image',
        'excerpt',
        'content',
        'published',
    ];

    // Cast 'published' to boolean
    protected $casts = [
        'published' => 'boolean',
    ];

    /**
     * Automatically generate slug from title if not provided
     */
    protected static function booted()
    {
        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = \Illuminate\Support\Str::slug($post->title);
            }
        });

        static::updating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = \Illuminate\Support\Str::slug($post->title);
            }
        });
    }
}
