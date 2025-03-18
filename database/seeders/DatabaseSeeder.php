<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use App\Models\Location;
use App\Models\Retailer;
use App\Models\ScrapedData;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Виклик сідера для продуктів
        $this->call([
            // ProductSeeder::class,
            // RetailerSeeder::class,            
            // SuperUserSeeder::class,
            // RetailerSeeder::class,
            // UserRetailerSeeder::class,
            // ImageSeeder::class
            
        ]);
    }
}
