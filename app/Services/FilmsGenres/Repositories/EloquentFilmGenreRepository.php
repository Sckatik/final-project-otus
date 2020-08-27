<?php

namespace App\Services\FilmsGenres\Repositories;

use App\Models\FilmGenre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Collection;

class EloquentFilmGenreRepository implements FilmGenreRepositoryInterface
{

    /*
    * выводим без пагинации для тестирования кеширования
    */
    public function index()
    {
        return FilmGenre::All();
    }
    
    public function find(int $id)
    {
        return FilmGenre::find($id);
    }

    public function getList(): Collection
    {
        $query = FilmGenre::query()->pluck('name', 'id');
        return $query;
    }

    public function search(array $filters = [])
    {
        $query = FilmGenre::query();
        $this->applyFilters($query, $filters);
        return $query->paginate();
    }

    /**
    * Поиск и выдача результата по таблице фильмов
    * @param int $id фильтр по наименованию фильма
    * @return Collection
    */
    public function searchByFilmId(int $id)
    {
        $filmGenre = FilmGenre::where('film_id',$id);
        return $filmGenre->get();
    }

    public function createFromArray(array $data): FilmGenre
    {
    
        return FilmGenre::create($data);
    }

    public function updateFromArray(FilmGenre $filmGenre, string $data)
    {
        $filmGenre->update($data);
        return $filmGenre;
    }

    private function applyFilters(Builder $builder, array $filters)
    {
        if (isset($filters['name'])) {
            $builder->where('name', $filters['name']);
        }
    }
}