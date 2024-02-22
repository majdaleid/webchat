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
        Schema::create('webchat_settings', function (Blueprint $table) {
            $table->id();
            $table->string('goal'); // For storing the goal text
            $table->text('data_collect')->nullable(); // For storing JSON data of selected checkboxes from the first step
            $table->text('answers_settings')->nullable(); // For storing JSON data of selected checkboxes from the second step
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('webchat_settings');
    }
};
