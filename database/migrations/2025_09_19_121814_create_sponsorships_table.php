<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sponsorships', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('contact_no')->nullable();
            $table->date('date')->nullable();
            $table->string('sponsorship')->nullable();
            $table->integer('no_of_participants')->nullable();
            $table->json('photos_videos')->nullable(); // store paths in JSON
            $table->decimal('cost', 10, 2)->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsorships');
    }
};
