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
        Schema::table('webchat_settings', function (Blueprint $table) {
            $table->text('message_headline')->nullable();
            $table->text('disclaimer_notice')->nullable();
            $table->text('disclaimer_description')->nullable();
            $table->text('welcome_message')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('webchat_settings', function (Blueprint $table) {
            $table->dropColumn(['message_headline', 'disclaimer_notice', 'disclaimer_description', 'welcome_message']);
        });
    }
};
