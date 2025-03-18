<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'manufacturer_part_number' => $this->faker->unique()->ean13,
            'pack_size' => $this->faker->randomElement(['case', 'each']),
            'images' => json_encode([$this->faker->imageUrl(), $this->faker->imageUrl()]),            
        ];
    }
}