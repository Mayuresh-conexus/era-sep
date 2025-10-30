<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('alumnis', function (Blueprint $table) {
    if (!Schema::hasColumn('alumnis', 'association')) {
        $table->enum('association', ['ex-student','former-staff'])->nullable()->after('status');
    }
    if (!Schema::hasColumn('alumnis', 'title')) {
        $table->enum('title', ['Mr.','Ms.','Mrs.','Dr.','Prof.'])->nullable()->after('association');
    }
    if (!Schema::hasColumn('alumnis', 'maiden_name')) {
        $table->string('maiden_name', 100)->nullable()->after('title');
    }
    if (!Schema::hasColumn('alumnis', 'mobile_country_code')) {
        $table->string('mobile_country_code', 10)->nullable()->after('phone');
    }
    if (!Schema::hasColumn('alumnis', 'mobile_number')) {
        $table->string('mobile_number', 20)->nullable()->after('mobile_country_code');
    }
    if (!Schema::hasColumn('alumnis', 'whatsapp_country_code')) {
        $table->string('whatsapp_country_code', 10)->nullable()->after('mobile_number');
    }
    if (!Schema::hasColumn('alumnis', 'whatsapp_number')) {
        $table->string('whatsapp_number', 20)->nullable()->after('whatsapp_country_code');
    }
    if (!Schema::hasColumn('alumnis', 'residential_number')) {
        $table->string('residential_number', 20)->nullable()->after('whatsapp_number');
    }
    if (!Schema::hasColumn('alumnis', 'employment_status')) {
        $table->string('employment_status', 50)->nullable()->after('residential_number');
    }
    if (!Schema::hasColumn('alumnis', 'job_title')) {
        $table->string('job_title', 150)->nullable()->after('company');
    }
    if (!Schema::hasColumn('alumnis', 'industry')) {
        $table->string('industry', 150)->nullable()->after('job_title');
    }
    if (!Schema::hasColumn('alumnis', 'linkedin_url')) {
        $table->string('linkedin_url', 255)->nullable()->after('industry');
    }
});

    }

    public function down(): void
    {
        Schema::table('alumnis', function (Blueprint $table) {
            $table->dropColumn([
                'association','title','maiden_name','mobile_country_code','mobile_number',
                'whatsapp_country_code','whatsapp_number','residential_number',
                'employment_status','company','job_title','industry','linkedin_url'
            ]);
        });
    }
};
