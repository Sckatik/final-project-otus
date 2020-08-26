<?php

use Illuminate\Database\Seeder;

class GenreAndFilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        foreach (\App\Models\Film::all() as $film) {
            factory(\App\Models\GenreAndFilm::class, 2)->create([
                'film_id' => $film->id,
                'genre_id'=>2
            ]);
        }

    }
}
