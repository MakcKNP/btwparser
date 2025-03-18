<?php

namespace Database\Factories;

use App\Models\ScrapedData;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScrapedDataFactory extends Factory
{
    protected $model = ScrapedData::class;

    public function definition()
    {
        return [
            'product_id' => \App\Models\Product::factory(),
            'retailer_id' => \App\Models\Retailer::factory(),
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'stock_count' => $this->faker->numberBetween(0, 100),
            'images' => json_encode([$this->faker->imageUrl(), $this->faker->imageUrl()]),
            'rating' => $this->faker->numberBetween(1, 5),
            'avg_rating' => $this->faker->randomFloat(1, 1, 5),
            'scraped_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}