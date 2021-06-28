<?php

namespace Database\Factories;

use App\Models\Tikect;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class TikectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tikect::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       //
        return [
            'name' => $this->faker->city(),
            'status' =>$this->faker->numberBetween(0,1), 
        ];
    }
}
