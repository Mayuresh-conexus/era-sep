<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('gallery_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gallery_id')->constrained()->onDelete('cascade');
            $table->string('type')->default('photo'); // photo or video
            $table->json('file_path')->nullable(); // supports multiple photos
            $table->string('video_url')->nullable(); // YouTube/Vimeo/embed link
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('gallery_media');
    }
};
