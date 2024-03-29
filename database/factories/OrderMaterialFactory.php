<?php

namespace Database\Factories;

use App\Models\OrderMaterial;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderMaterialFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrderMaterial::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'material_name' => $this->faker->title,
            'type' => $this->faker->bloodType(),
            'order_id' => random_int(1, 10),
        ];
    }
}