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
        Schema::create('multi_images', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->string('image_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop individual columns if needed
        Schema::table('multi_images', function (Blueprint $table) {
            $table->dropColumn('product_id');
            $table->dropColumn('image_name');
        });

        Schema::dropIfExists('multi_images');
    }
};
