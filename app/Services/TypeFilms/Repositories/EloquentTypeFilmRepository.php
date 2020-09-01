<?php

namespace App\Services\TypeFilms\Repositories;

use App\Models\TypeFilm;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use DB;


class EloquentTypeFilmRepository implements TypeFilmRepositoryInterface
{

    /*
    * выводим без пагинации для тестирования кеширования
    */
    public function index():Collection
    {
        return TypeFilm::All();
    }

    public function find(int $id)
    {
        return TypeFilm::find($id);
    }

    public function getList(int $limit, int $offset)
    {
        $query = TypeFilm::query();
        $query->limit($limit);
        $query->offset($offset);

        return $query->get();
    }

    public function getAllList():Collection
    {
        $query = TypeFilm::query();
        return $query->get();
    }

    

    public function search(array $filters = [])
    {
        $query = TypeFilm::query();
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
            $films = TypeFilm::where('title', 'like', "%" . $name . "%")
                ->orderBy('id', 'desc')
                ->paginate();
        } else {
            $films = TypeFilm::orderBy('id', 'desc')->paginate();
        }
        return $films;
    }

    public function createFromArray(array $data): TypeFilm
    {

        return TypeFilm::create($data);
    }

    public function updateFromArray(TypeFilm $film, array $data)
    {
        $film->update($data);
        return $film;
    }




    public function paginate($items, $perPage = 15, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    private function applyFilters(Builder $builder, array $filters)
    {
        if (isset($filters['name'])) {
            $builder->where('name', $filters['name']);
        }
    }
}
