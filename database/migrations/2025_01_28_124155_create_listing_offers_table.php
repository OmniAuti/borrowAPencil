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
        Schema::create('listing_offers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(App\Models\user::class);
            $table->string('category');
            $table->string('level');
            $table->string('condition');
            $table->string('details');
            $table->string('zipcode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listing_offers');
    }
};
