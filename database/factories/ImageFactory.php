<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Retailer;
use App\Models\Image;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Images>
 */
class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {
        return [
            'url' => json_encode([$this->faker->imageUrl(), $this->faker->imageUrl()]),
            'title' => $this->faker->sentence(),
            'alt' => $this->faker->words(3, true),
            'product_id' => \App\Models\Product::factory(),
        ];
    }
}

