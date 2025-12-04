<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Product;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $sitemap = '<?xml version="1.0" encoding="UTF-8"?>';
        $sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        
        // Homepage
        $sitemap .= '<url>';
        $sitemap .= '<loc>' . url('/') . '</loc>';
        $sitemap .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $sitemap .= '<changefreq>daily</changefreq>';
        $sitemap .= '<priority>1.0</priority>';
        $sitemap .= '</url>';
        
        // Static pages
        $staticPages = [
            ['url' => 'about', 'priority' => '0.8'],
            ['url' => 'produk', 'priority' => '0.9'],
            ['url' => 'galeri', 'priority' => '0.7'],
            ['url' => 'artikel', 'priority' => '0.8'],
            ['url' => 'contact', 'priority' => '0.7'],
            ['url' => 'outlet', 'priority' => '0.7'],
            ['url' => 'partner', 'priority' => '0.7'],
        ];
        
        foreach ($staticPages as $page) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . url($page['url']) . '</loc>';
            $sitemap .= '<lastmod>' . date('Y-m-d') . '</lastmod>';
            $sitemap .= '<changefreq>weekly</changefreq>';
            $sitemap .= '<priority>' . $page['priority'] . '</priority>';
            $sitemap .= '</url>';
        }
        
        // Products
        $products = Product::all();
        foreach ($products as $product) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . route('detail-produk', $product->id) . '</loc>';
            $sitemap .= '<lastmod>' . $product->updated_at->format('Y-m-d') . '</lastmod>';
            $sitemap .= '<changefreq>monthly</changefreq>';
            $sitemap .= '<priority>0.8</priority>';
            $sitemap .= '</url>';
        }
        
        // Articles
        $articles = Artikel::orderBy('created_at', 'desc')->get();
        foreach ($articles as $article) {
            $sitemap .= '<url>';
            $sitemap .= '<loc>' . route('artikel-detail', $article->slug) . '</loc>';
            $sitemap .= '<lastmod>' . $article->updated_at->format('Y-m-d') . '</lastmod>';
            $sitemap .= '<changefreq>monthly</changefreq>';
            $sitemap .= '<priority>0.7</priority>';
            $sitemap .= '</url>';
        }
        
        $sitemap .= '</urlset>';
        
        return response($sitemap, 200)
            ->header('Content-Type', 'text/xml');
    }
}
