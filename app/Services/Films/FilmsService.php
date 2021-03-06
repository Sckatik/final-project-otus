<?php

namespace App\Services\Films;

use App\Models\Film;
use App\Models\Genre;
use App\Services\Films\Handlers\CreateFilmHandler;
use App\Services\Films\Handlers\IndexFilmHandler;
use App\Services\Films\Handlers\ShowFilmHandler;
use App\Services\Films\Handlers\ShowFilmInSliderHandler;
use App\Services\Films\Repositories\FilmRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;
use App\Services\Films\Repositories\CachedFilmRepositoryInterface;

class FilmsService
{

    /** @var FilmRepositoryInterface */
    private $filmRepository;
    /** @var CreateFilmHandler */
    private $createFilmHandler;
    /** @var CachedFilmRepositoryInterface */
    private $cachedFilmRepository;
    /** @var ShowFilmInSliderHandler */
     private $showFilmInSliderHandler;

    public function __construct(
        IndexFilmHandler $indexFilmHandler,
        CreateFilmHandler $createFilmHandler,
        ShowFilmHandler $showFilmHandler,
        FilmRepositoryInterface $filmRepository,
        CachedFilmRepositoryInterface $cachedFilmRepository,
        ShowFilmInSliderHandler $showFilmInSliderHandler
    ) {
        $this->indexFilmHandler = $indexFilmHandler;
        $this->createFilmHandler = $createFilmHandler;
        $this->showFilmHandler = $showFilmHandler;
        $this->filmRepository = $filmRepository;
        $this->cachedFilmRepository = $cachedFilmRepository;
        $this->showFilmInSliderHandler = $showFilmInSliderHandler;
    }

    /**
     * @param int $id
     * @return Film|null
     */
    public function findFilmCached(int $id)
    {
        return $this->cachedFilmRepository->find($id);
    }

    public function indexFilm()
    {
        return $this->indexFilmHandler->handle();
    }

    public function filmsInSlider():Array
    {
        return $this->showFilmInSliderHandler->handle();
    }

    /**
     * @param string $genre
     * @return Genre
    */
    public function getFilmByGenre(string $genre):Genre
    {
        return $this->filmRepository->getFilmByGenre($genre);
    }


    /**
     * @param string $genre
     * @return Array
    */
    public function getFilmByGenreInSlider(string $genre):Array
    {
        return $this->filmRepository->getFilmByGenreInSlider($genre);
    }

    /**
     * @param int $id
     * @return Film|null
     */
    public function findFilm(int $id)
    {
        return $this->filmRepository->find($id);
    }

    /**
     * @param string $genre
     * @param string $slug
     * @return Film
    */
    public function show(string $genre, string $slug)
    {
        return $this->showFilmHandler->handle($genre,$slug);
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function searchFilms(): LengthAwarePaginator
    {
        return $this->filmRepository->search();
    }

    /**
     * @param int $limit
     * @param int $offset
     * @return Collection
     */
    public function getFilms(int $limit, int $offset): Collection
    {
        return $this->filmRepository->getList($limit, $offset);
    }

    /**
     * @param array $data
     * @return Film
     */
    public function createFilm(array $data): Film
    {
        return $this->createFilmHandler->handle($data);
    }

    /**
     * @param Film $film
     * @param array $data
     * @return Film
     */
    public function updateFilm(Film $film, array $data): Film
    {
        return $this->filmRepository->updateFromArray($film, $data);
    }


    /**
     * @param Film $film
     * @return boolean
     */
    public function publishFilm(Film $film)
    {
        $film->status = Film::STATUS_PUBLISHED;

        return $film->save();
    }

}
