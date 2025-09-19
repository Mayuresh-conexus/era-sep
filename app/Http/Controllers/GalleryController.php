<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Fetch only needed fields with media relation
        $galleries = Gallery::with('media')->select('id', 'title', 'year')->get();
        return view('galleries.index', compact('galleries'));
    }

    public function show(Gallery $gallery)
    {
        // Load all media for this gallery
        $gallery->load('media');
        return view('galleries.show', compact('gallery'));
    }
}
