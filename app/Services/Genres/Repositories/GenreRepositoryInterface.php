<?php

namespace App\Services\Genres\Repositories;

use App\Models\Genre;
use Illuminate\Support\Collection;

interface GenreRepositoryInterface
{
    public function index();

    public function find(int $id);

    public function getList(): Collection;

    public function searchByNames(string $name = '');

    public function search(array $filters = []);

    public function createFromArray(array $data): Genre;
    
    public function updateFromArray(Genre $genre, array $data);
}