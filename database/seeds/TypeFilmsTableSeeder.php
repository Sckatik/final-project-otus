<?php

use Illuminate\Database\Seeder;

class TypeFilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\TypeFilm::class, 3)->create();
    }
}
