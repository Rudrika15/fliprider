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
        Schema::create('rides', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rider_id')->constrained('users');
            $table->foreignId('driver_id')->nullable()->constrained('users');
            $table->json('pickup_location');
            $table->json('dropoff_location');
            $table->enum('status', ['requested', 'accepted', 'in_progress', 'completed', 'cancelled'])
                ->default('requested');
            $table->decimal('fare', 10, 2)->nullable();
            $table->enum('payment_status', ['pending', 'paid'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rides');
    }
};
