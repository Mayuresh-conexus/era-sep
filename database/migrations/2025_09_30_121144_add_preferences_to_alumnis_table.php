<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('alumnis', function (Blueprint $table) {
            $table->json('interests')->nullable()->after('passing_year');
            $table->json('communication_preferences')->nullable()->after('interests');
            $table->boolean('verify_info')->default(false);
            $table->boolean('agree_terms')->default(false);
            $table->boolean('consent_communications')->default(false);
        });
    }

    public function down(): void
    {
        Schema::table('alumnis', function (Blueprint $table) {
            $table->dropColumn(['interests', 'communication_preferences']);
        });
    }
};
