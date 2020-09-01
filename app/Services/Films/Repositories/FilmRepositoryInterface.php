<?php

namespace App\Services\Films\Repositories;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface FilmRepositoryInterface
{
    public function index();

    public function find(int $id);

    public function getList(int $limit, int $offset);

    public function searchByNames(string $name = '');

    public function search(array $filters = []);

    public function getFilmByGenre(string $genre): Genre;

    public function getFilmInSlider(): Collection;

    public function getFilmByGenreInSlider(string $genre): Array;
    
    public function createFromArray(array $data): Film;

    public function findFilmByGenreAndSlug(string $genre, string $slug): Film;

    public function updateFromArray(Film $film, array $data);
}
