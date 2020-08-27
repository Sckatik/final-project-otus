<?php

namespace App\Services\Genres;

use App\Models\Genre;
use App\Services\Genres\Repositories\GenreRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class GenresService
{

    /** @var GenreRepositoryInterface */
    private $genreRepository;

    public function __construct(
        GenreRepositoryInterface $genreRepository
    ) {
        $this->genreRepository = $genreRepository;
    }

    /**
     * @param int $id
     * @return Film|null
     */
    public function findGenre(int $id)
    {
        return $this->genreRepository->find($id);
    }

    /**
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function searchGenres(): LengthAwarePaginator
    {
        return $this->genreRepository->search();
    }

    /**
     * @param int $limit
     * @param int $offset
     * @return Collection
     */
    public function getGenres(): Collection
    {
        return $this->genreRepository->getList();
    }

    /**
     * @param Film $film
     * @param array $data
     * @return Film
     */
    public function updateFilm(Film $film, array $data): Film
    {
        return $this->genreRepository->updateFromArray($film, $data);
    }

}
