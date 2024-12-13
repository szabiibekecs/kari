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
        Schema::create('gift_wishlist', function (Blueprint $table) {
            $table->id();
            $table->foreignId('gift_id')->constrained('gifts');
            $table->foreignId('wishlist_id')->constrained('wishlists');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gift_wishlist');
    }
};
