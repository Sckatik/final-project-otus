<?php

namespace App\Models;

/**
 * App\Models\TypeFilm
 *
 * @property int $id
 * @property string $name Название типа фильма
 */
class TypeFilm extends Model
{
    /**
    * The table associated with the model.
    *
    * @var string
    */
    protected $table = 'type_films';


    protected $fillable = [
        'name'
    ];
}
