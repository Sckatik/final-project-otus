<?php

namespace App\Models;

class GenreAndFilm extends Model
{
    //

    protected $table = 'genres_and_films';

    protected $fillable = [
        'id',
        'film_id',
        'genre_id'
    ];

    public function films()
    {
        //один ко многим
        return $this->hasMany(Film::class);
    }

    public function genres()
    {
        //один ко многим
        return $this->hasMany(Genre::class);
    }
}
