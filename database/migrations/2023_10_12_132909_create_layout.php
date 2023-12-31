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
        Schema::create('layout', function (Blueprint $table) {
            $table->id();
            $table->string('page_name');
            $table->string('page_url');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keywords');
            $table->string('favicon_icon');
            $table->string('logo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layout');
    }
};
