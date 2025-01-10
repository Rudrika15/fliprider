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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->integer('placement_id');
            $table->string('title');
            $table->string('content')->nullable();
            $table->string('media')->nullable();
            $table->enum('type', ['banner', 'popup', 'video']);
            $table->string('target_url')->nullable();
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
