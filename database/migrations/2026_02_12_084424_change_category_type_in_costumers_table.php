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
        Schema::table('costumers', function (Blueprint $table) {
            $table->text('category')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('costumers', function (Blueprint $table) {
            $table->enum('category', [
                'web_application',
                'education',
                'social_media',
                'it_support',
                'dashboard'
            ])->change();
        });
    }
};
