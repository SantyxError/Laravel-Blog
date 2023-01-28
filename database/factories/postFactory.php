<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class postFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            //Definimos Titulos y contenido aleatorio
            'titulo' => $this->faker->sentence(10),
            'contenido' => $this->faker->paragraph(20)
        ];
    }
}
