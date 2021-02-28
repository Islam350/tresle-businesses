<?php

namespace Database\Factories;

use App\Models\Business;
use App\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

class BusinessFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Business::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name,
            'price'             => rand(pow(10,4),pow(10,7)),
            'city_id'           => City::query()->inRandomOrder()->first()->getKey(),
        ];
    }
}
