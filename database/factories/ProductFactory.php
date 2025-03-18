<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Product;
use App\Models\Packsize;
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
            'pack_size' => Packsize::inRandomOrder()->first()->id,
            'user_id' => User::inRandomOrder()->first()->id,
            'images' => json_encode([$this->faker->imageUrl(), $this->faker->imageUrl()]),            
        ];
    }
}