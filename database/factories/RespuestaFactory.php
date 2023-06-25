<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Formulario;
use App\Models\Respuesta;
use App\Models\User;

class RespuestaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Respuesta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'puntuacion' => $this->faker->word,
            'formulario_id' => Formulario::factory(),
            'estadoTrivia' => $this->faker->word,
            'estado' => $this->faker->boolean,
        ];
    }
}
