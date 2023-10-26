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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('familyName');
            $table->string('firstName');
            $table->string('email');
            $table->string('phoneNumber');
            $table->date('eventDate');
            $table->string('eventLocation');
            $table->string('eventType');
            $table->string('streetNumber');
            $table->string('streetName');
            $table->string('city');
            $table->string('country');
            $table->string('information')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
