<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = ['title', 'year', 'description'];

    public function media()
    {
        return $this->hasMany(GalleryMedia::class);
    }
}
