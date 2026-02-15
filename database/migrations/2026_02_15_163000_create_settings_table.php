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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('about_us')->nullable();
            $table->text('why_us')->nullable();
            $table->text('goal')->nullable();
            $table->text('vision')->nullable();
            $table->text('about_footer')->nullable();
            $table->text('ads_text')->nullable();
            $table->text('activities_text')->nullable();
            $table->text('persons_text')->nullable();
            $table->text('contact_us_text')->nullable();
            $table->text('terms_text')->nullable();
            $table->text('activity_terms')->nullable();
            $table->string('counter1_name', 255)->nullable();
            $table->bigInteger('counter1_count')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
