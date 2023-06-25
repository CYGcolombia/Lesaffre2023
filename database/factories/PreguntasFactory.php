<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formularios;
use App\Models\Preguntas;

class PreguntasFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Preguntas::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'formularios_id' => Formularios::factory(),
            'pregunta' => $this->faker->text,
            'archivo' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'calificacion' => $this->faker->word,
            'estado' => $this->faker->boolean,
        ];
    }
}
