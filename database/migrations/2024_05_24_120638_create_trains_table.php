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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('company', 100);
            $table->string('departure', 150);
            $table->string('destination', 150);
            $table->dateTime('departure_time', $precision = 0);
            $table->dateTime('arrival_time', $precision = 0);
            $table->string('train_code', 10);
            $table->tinyInteger('train_carriages');
            $table->boolean('in_time');
            $table->boolean('canceled');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
