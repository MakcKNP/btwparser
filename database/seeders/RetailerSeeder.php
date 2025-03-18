<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Retailer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RetailerSeeder extends Seeder
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
                if (!$product->retailers()->where('retailer_id', $retailer->id)->exists()) {                  
                    $product->retailers()->attach($retailer->id);
                }
            }
        }

        
    }
}
