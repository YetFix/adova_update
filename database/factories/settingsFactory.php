<?php

namespace Database\Factories;

use App\Models\settings;
use Illuminate\Database\Eloquent\Factories\Factory;

class settingsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Settings::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'local' => $this->faker->boolean(1),
            'import' => $this->faker->boolean(1),
        ];
    }
}