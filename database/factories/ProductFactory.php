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
        $index = 0;
        return [
            //
            
            'img' => 'public/images/product-0'.++$index.'.jpg',
            'name' => $this->faker->name(),
          
            'desc' => $this->faker->url(),
            'price' => $this->faker->randomDigit(),
            'category_id' => 1,

        ];
    }
}
