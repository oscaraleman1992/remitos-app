<?php

namespace Database\Factories;

use App\Models\Receptor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReceptorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Receptor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organismo' => $this->faker->word,
        'reparticion' => $this->faker->word,
        'dependencia' => $this->faker->word,
        'domicilio' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
