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
        Schema::create('cards', function (Blueprint $table) {
        
        $table->string('account_holder');
        $table->string('taxpayer_registry');
        $table->string('card_number');
        $table->string('month_validity');
        $table->string('expiry_year');
        $table->string('cvv');
        $table->string('flag');
        $table->id();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
