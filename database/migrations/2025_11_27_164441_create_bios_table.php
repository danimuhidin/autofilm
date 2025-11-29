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
        Schema::create('bios', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('favicon')->nullable();
            $table->string('brand_img')->nullable();
            $table->string('brand_name');
            $table->string('tagline')->nullable();
            $table->text('greeting_home')->nullable();
            $table->text('greeting_about')->nullable();
            $table->text('address')->nullable();
            $table->string('telp')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('ig_name')->nullable();
            $table->string('ig_link')->nullable();
            $table->string('fb_name')->nullable();
            $table->string('fb_link')->nullable();
            $table->string('youtube_name')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('tiktok_name')->nullable();
            $table->string('tiktok_link')->nullable();
            $table->string('email')->nullable();
            $table->string('operation_time')->nullable();
            $table->text('link_maps_embed')->nullable();
            $table->text('link_maps_direction')->nullable();
            $table->string('img_home')->nullable();
            $table->string('img_about')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bios');
    }
};
