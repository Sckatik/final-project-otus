<?php

namespace App\Services\Films\Handlers;


use App\Models\Film;
use App\Services\Films\Repositories\EloquentFilmRepository;
use App\Services\Genres\Repositories\EloquentGenreRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

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
     * @param string $genre
     * @param string $slug
     * @return Film|LengthAwarePaginator
     */
    public function handle(string $genre, string $slug)
    {

        //показываем список фильмов по жанру
        if($genre=="category"){
            $film = $this->filmRepository->getFilmByGenre($slug);
            $film->test = 'sdfsdf';
        }
        else{
            $film = $this->filmRepository->findFilmByGenreAndSlug($genre, $slug);

            if ($film->getRelations()['genres']->isEmpty()) {
                abort(404);
            } else {
                $findGenre = false;
                foreach ($film->getRelations()['genres']->all() as $item) {
                    if ($item->slug==$genre) {
                        $findGenre = true;
                    }
                }
                if(!$findGenre){
                    abort(404);
                }
            }

        }
        return $film;
    }

}
