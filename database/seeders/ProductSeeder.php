<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'V-KOOL 40',
                'vlt' => '40%',
                'uvr' => '99%',
                'irr' => '95%',
                'tser' => '60%',
                'short_desc' => 'Premium quality window film with excellent heat rejection',
                'item_desc' => 'V-KOOL 40 is designed for optimal comfort with maximum visibility',
                'price_desc' => 'Starting from Rp 3.500.000 for small cars',
                'price' => 'Rp 3.500.000',
                'full_desc' => 'V-KOOL 40 provides superior heat rejection while maintaining excellent visibility. Perfect for those who want comfort without sacrificing clarity.',
                'spec_desc' => 'Made with advanced nano-ceramic technology for long-lasting performance',
                'maintenance_desc' => 'Easy to maintain, can be cleaned with regular glass cleaner',
                'term_desc' => 'Includes 5-year warranty and free installation',
            ],
            [
                'name' => 'LLumar ATR',
                'vlt' => '20%',
                'uvr' => '99%',
                'irr' => '97%',
                'tser' => '70%',
                'short_desc' => 'Advanced thermal rejection technology',
                'item_desc' => 'LLumar ATR offers superior heat rejection with darker tint',
                'price_desc' => 'Starting from Rp 4.000.000 for small cars',
                'price' => 'Rp 4.000.000',
                'full_desc' => 'LLumar ATR is engineered with advanced technology to block heat and UV rays while providing privacy and style.',
                'spec_desc' => 'Multi-layer construction with scratch-resistant coating',
                'maintenance_desc' => 'Requires no special maintenance, durable and long-lasting',
                'term_desc' => 'Comes with 7-year warranty and professional installation',
            ],
            [
                'name' => '3M Crystalline',
                'vlt' => '70%',
                'uvr' => '99.9%',
                'irr' => '97%',
                'tser' => '60%',
                'short_desc' => 'Crystal clear with maximum protection',
                'item_desc' => '3M Crystalline provides maximum protection without dark tint',
                'price_desc' => 'Starting from Rp 5.000.000 for small cars',
                'price' => 'Rp 5.000.000',
                'full_desc' => '3M Crystalline is the perfect choice for those who want maximum protection while maintaining the original look of their vehicle.',
                'spec_desc' => 'Patented multilayer optical film technology',
                'maintenance_desc' => 'Simple maintenance with any standard glass cleaner',
                'term_desc' => 'Backed by lifetime warranty and expert installation',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
