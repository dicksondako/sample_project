<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'supplier_id'=>Supplier::factory(),
            'title'=> $this->faker->text(20),
            'description'=> $this->faker->text(200),
            'qty' =>$this->faker->numberBetween($min = 0, $max = 15),
            'size'=>$this->faker->numberBetween($min = 8, $max = 12),
        ];
    }
}
