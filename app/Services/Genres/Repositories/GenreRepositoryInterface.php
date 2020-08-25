<?php

namespace App\Services\Genres\Repositories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Collection;

interface GenreRepositoryInterface
{
    public function index();

    public function find(int $id);

    public function getList(int $limit, int $offset);

    public function searchByNames(string $name = '');

    public function search(array $filters = []);

    public function createFromArray(array $data): Genre;
    
    public function updateFromArray(Genre $genre, array $data);
}