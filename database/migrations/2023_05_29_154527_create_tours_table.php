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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('tour_type');
            $table->string('title');
            $table->string('excerpt');
            $table->string('location');
            $table->string('img1');
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->integer('duration');
            $table->decimal('price');
            $table->string('months')->nullable();
            $table->longText('description');
            $table->string('details1')->nullable();
            $table->string('details2')->nullable();
            $table->string('details3')->nullable();
            $table->string('details4')->nullable();
            $table->string('details5')->nullable();
            $table->integer('max_persons');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
