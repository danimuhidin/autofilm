<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'favicon',
        'brand_img',
        'brand_name',
        'tagline',
        'greeting_home',
        'greeting_about',
        'address',
        'telp',
        'whatsapp',
        'ig_name',
        'ig_link',
        'fb_name',
        'fb_link',
        'youtube_name',
        'youtube_link',
        'tiktok_name',
        'tiktok_link',
        'email',
        'operation_time',
        'link_maps_embed',
        'link_maps_direction',
        'img_home',
        'img_about',
    ];
}
