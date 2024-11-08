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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('column_name', 255);
            $table->string('loc_found'); // Mengganti 'location' tanpa menggunakan cache()
            $table->string('loc_custody'); // Mengganti 'loc_custody' tanpa menggunakan cache()
            $table->string('image');
            $table->text('description');
            $table->text('condition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
