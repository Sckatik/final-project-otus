<?php

namespace App\Services\Films\Handlers;


use App\Models\Film;
use App\Services\Films\Repositories\EloquentFilmRepository;
use App\Services\Genres\Repositories\EloquentGenreRepository;

class ShowFilmHandler
{

    private $filmRepository, $genreRepository;

    public function __construct(
        EloquentFilmRepository $filmRepository,
        EloquentGenreRepository $genreRepository
    )
    {
        $this->filmRepository = $filmRepository;
        $this->genreRepository = $genreRepository;
    }

    /**
     * показ фильма
     * если запрашиваемый фильм не содержит переданный жанр
     * возвращаем ошибку
     * @param array $data
     * @return Film
     */
    public function handle(string $genre, string $slug): Film
    {
        //показываем список фильмов по жанру
        if($genre=="category"){
            echo '123';
        }
        else{
            $film = $this->filmRepository->findFilmByGenreAndSlug($genre, $slug);

            if ($film->getRelations()['genres']->isEmpty()) {
                abort(404);
            } else {
                foreach ($film->getRelations()['genres']->all() as $item) {
                    if ($item->slug!=$genre) {
                        abort(404);
                    }
                }
            }
         
        }
        return $film;
    }

}
