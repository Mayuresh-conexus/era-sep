<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryMedia extends Model
{
    protected $fillable = ['gallery_id', 'type', 'file_path', 'video_url'];

    // Cast file_path to array for multiple uploads
    protected $casts = [
        'file_path' => 'array',
    ];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
