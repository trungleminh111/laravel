<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'img' => $this->faker->name(),
            'name' => $this->faker->name(),
          
            'desc' => $this->faker->url(),
            'price' => $this->faker->randomDigit(),
            'category_id' => 1,

        ];
    }
}
