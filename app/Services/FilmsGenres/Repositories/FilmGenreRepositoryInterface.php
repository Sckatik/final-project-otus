<?php

namespace App\Services\FilmsGenres\Repositories;

use App\Models\FilmGenre;
use App\Models\Film;
use Illuminate\Support\Collection;

interface FilmGenreRepositoryInterface
{
    public function index();

    public function find(int $id);

    public function getList(): Collection;

    public function searchByFilmId(int $id);

    public function search(array $filters = []);

    public function createFromArray(array $data): FilmGenre;
    
    public function updateFromArray(FilmGenre $filmGenre, string $data);
}