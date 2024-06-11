<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * create TABLE 'train'(
     * ‘id’, UNSIGNED BIGINT NOT NULL AUTO_INCREMENT,
     * 'company', VARCHAR(255) NOT NULL,
     * 'departureStation', VARCHAR(255) NOT NULL,
     * 'arrivalStation', VARCHAR(255) NOT NULL,
     * 'departureTime', TIME NOT NULL,
     * 'arrivalTime', TIME NOT NULL,
     * 'trainNumber', VARCHAR(255) NOT NULL,
     * 'carriagesNumber', TINYINT UNSIGNED,
     * 'inTime', BOOLEAN NOT NULL,
     * 'cancelled', BOOLEAN,
     * ‘created_at’ TIMESTAMP NULL,
     * ‘updated_at’ TIMESTAMP NULL, 
     * ‘PRIMARY KEY(‘id’) 
     * );
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('departureStation');
            $table->string('arrivalStation');
            $table->time('departureTime');
            $table->time('arrivalTime');
            $table->unsignedSmallInteger('trainNumber');
            $table->unsignedTinyInteger('carriagesNumber');
            $table->boolean('inTime')->default(true);
            $table->boolean('cancelled')->default(false);
            $table->timestamps();
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
