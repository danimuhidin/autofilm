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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon')->nullable();
            $table->string('vlt')->nullable();
            $table->string('uvr')->nullable();
            $table->string('irr')->nullable();
            $table->string('tser')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('item_desc')->nullable();
            $table->text('price_desc')->nullable();
            $table->string('price')->nullable();
            $table->text('full_desc')->nullable();
            $table->text('spec_desc')->nullable();
            $table->text('maintenance_desc')->nullable();
            $table->string('img1')->nullable();
            $table->string('img2')->nullable();
            $table->string('img3')->nullable();
            $table->string('img4')->nullable();
            $table->string('img5')->nullable();
            $table->text('term_desc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
