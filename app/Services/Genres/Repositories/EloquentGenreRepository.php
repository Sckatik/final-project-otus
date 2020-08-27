<?php

namespace App\Services\Genres\Repositories;

use App\Models\Genre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class EloquentGenreRepository implements GenreRepositoryInterface
{

    /*
    * выводим без пагинации для тестирования кеширования
    */
    public function index()
    {
        return Genre::All();
    }
    
    public function find(int $id)
    {
        return Genre::find($id);
    }

    public function getList(): Collection
    {
        $query = Genre::query()->pluck('name', 'id');
        //dd($query);
        return $query;
    }

    public function search(array $filters = [])
    {
        $query = Genre::query();
        $this->applyFilters($query, $filters);
        return $query->paginate();
    }

    /**
    * Поиск и выдача результата по таблице фильмов
    * @param string $name фильтр по наименованию фильма
    * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
    */
    public function searchByNames(string $name = '')
    {
        if ($name) {
            $genres = Genre::where('title', 'like', "%" . $name . "%")
                ->orderBy('id', 'desc')
                ->paginate();
        } else {
            $genres = Genre::orderBy('id', 'desc')->paginate();
        }
        return $genres;
    }

    public function createFromArray(array $data): Genre
    {
    
        return Genre::create($data);
    }

    public function updateFromArray(Genre $film, array $data)
    {
        $genre->update($data);
        return $genre;
    }

    private function applyFilters(Builder $builder, array $filters)
    {
        if (isset($filters['name'])) {
            $builder->where('name', $filters['name']);
        }
    }
}