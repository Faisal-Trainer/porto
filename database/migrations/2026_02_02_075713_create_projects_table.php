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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->string('judul');                 // Website - Warung Siyas
            $table->string('slug')->unique();        // untuk URL SEO
            $table->enum('kategori', [
                'web_application',
                'education',
                'social_media',
                'it_support',
                'dashboard'
            ]);
            $table->text('deskripsi');               // Deskripsi di card
            $table->string('thumbnail');             // Foto project
            $table->string('demo_url')->nullable();  // Link demo / detail
            $table->date('tanggal_rilis')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
