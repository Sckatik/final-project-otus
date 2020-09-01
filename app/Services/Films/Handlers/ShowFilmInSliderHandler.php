<?php

namespace App\Services\Films\Handlers;


use App\Models\Film;
use App\Models\FilmGenre;
use App\Models\Genre;
use App\Services\Films\Repositories\EloquentFilmRepository;
use App\Services\Genres\Repositories\EloquentGenreRepository;
use App\Services\TypeFilms\Repositories\EloquentTypeFilmRepository;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ShowFilmInSliderHandler
{

    private $filmRepository, $genreRepository;

    public function __construct(
        EloquentFilmRepository $filmRepository,
        EloquentGenreRepository $genreRepository,
        EloquentTypeFilmRepository $typeFilmRepository
    )
    {
        $this->filmRepository = $filmRepository;
        $this->genreRepository = $genreRepository;
        $this->typeFilmRepository = $typeFilmRepository;
    }

    /**
     * @param string $genre
     * @param string $slug
     * @return array
     */
    public function handle()
    {
        $films = $this->filmRepository->getFilmInSlider();
        $arFilm = [];
        foreach($films as $item){
            $typeFilm = $this->typeFilmRepository->find($item->type);
            //TypeFilm::where('id',$item->type)->firstOrFail();
            $filmGenre = FilmGenre::where('film_id', $item->id)->firstOrFail();
            $genre = Genre::where('id',$filmGenre['genre_id'])->firstOrFail();
            $arFilm[] = [
                "title"=>$item->title,
                "slug"=>$genre->slug.'/'.$item->slug,
                "image"=>$item->image,
                "type"=>$typeFilm->name
            ];
        }

        return $arFilm;
     
    }

}
