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
        Schema::create('about_tims', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('poster');
            $table->string('subheading');
            $table->string('heading');
            $table->text('article');
            $table->text('achivment1');
            $table->text('achivment2');
            $table->text('achivment3');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_tims');
    }
};
