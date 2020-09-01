<?php

namespace App\Services\TypeFilms\Repositories;

use App\Models\TypeFilm;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface TypeFilmRepositoryInterface
{
    public function index(): Collection;

    public function find(int $id);

    public function getList(int $limit, int $offset);

    public function getAllList():Collection;

    public function searchByNames(string $name = '');

    public function search(array $filters = []);
    
    public function createFromArray(array $data): TypeFilm;

    public function updateFromArray(TypeFilm $typeFilm, array $data);
}
