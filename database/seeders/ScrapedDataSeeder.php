<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Retailer;
use App\Models\ScrapedData;
use Illuminate\Database\Seeder;

class ScrapedDataSeeder extends Seeder
{
    public function run()
    {
        
        $products = Product::all();
        $retailers = Retailer::all();
        
        if ($products->isEmpty() || $retailers->isEmpty()) {            
            return;
        }
        
        foreach ($products as $product) {            
            $randomRetailers = $retailers->random(rand(1, $retailers->count()));
            foreach ($randomRetailers as $retailer) {
                
                ScrapedData::create([
                    'product_id' => $product->id,
                    'retailer_id' => $retailer->id,
                    'title' => $product->title,
                    'description' => $product->description,
                    'price' => rand(10, 1000), 
                    'stock_count' => rand(0, 100), 
                    'images' => json_encode([$product->images]), 
                    'rating' => rand(1, 5), 
                    'avg_rating' => rand(1, 5) + (rand(0, 9) / 10), 
                    'scraped_at' => now()->subDays(rand(0, 365)), 
                ]);
            }
        }
        
    }
}