<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Libro;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        Libro::factory(5)->create();
        $libros=Libro::all();
        foreach ($libros as $libro) {
            if (mb_stripos($libro->imagen, "public/")) {
                $libro->image=str_replace(["public/"], "", $libro->imagen);
            }
        }
    }
}
