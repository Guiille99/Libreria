<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(), 
            'autor' => $this->faker->sentence(),
            'editorial' => $this->faker->randomElement(["Anaya", "Booket", "Ecobook", "Edebé", "Kairós", "Librooks", "Pálido Fuego", "Phoebe", "Raíces", "Reverté", "Umbriel", "Underwood", "VV Kids", "Wave Books"]),
            'portada',
            'isbn',
            'fecha_publicacion',
            'precio' => $this->faker->randomFloat(2, 2, 50),
            'genero' => $this->faker->randomElement(["Infantil y juvenil", "Aventuras", "Comedia", "Misterio", "Terror", "Amor", "Artes", "Ficción", "Deporte", "Fantasía", "Gastronomía", "Hitoria", "Idiomas", "Clásicos", "Piscología/Autoayuda", "Informática", "Ciencia"]),
            'descripcion' => $this->faker->paragraph(),
            'valoracion' => $this->faker->random_int(1, 10),
            'paginas' => $this->faker->random_int(80, 400),
            'stock' => $this->faker->random_int(0, 100)

        ];
    }
}
