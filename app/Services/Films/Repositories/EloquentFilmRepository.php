<?php

namespace App\Services\Films\Repositories;

use App\Models\Film;
use App\Models\Genre;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use DB;


class EloquentFilmRepository implements FilmRepositoryInterface
{
    const DEFAULT_LIST_CACHE_TTL = 300;

    /*
    * выводим без пагинации для тестирования кеширования
    */
    public function index()
    {
        return Film::All();
    }

    public function find(int $id)
    {
        return Film::find($id);
    }

    public function getList(int $limit, int $offset, int $remember = self::DEFAULT_LIST_CACHE_TTL)
    {
        $query = Film::query();
        $query->limit($limit);
        $query->offset($offset);

        $query->remember($remember)
            ->cacheTags('films');

        return $query->get();
    }

    public function search(array $filters = [])
    {
        $query = Film::query();
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
            $films = Film::where('title', 'like', "%" . $name . "%")
                ->orderBy('id', 'desc')
                ->paginate();
        } else {
            $films = Film::orderBy('id', 'desc')->paginate();
        }
        return $films;
    }

    public function createFromArray(array $data): Film
    {

        return Film::create($data);
    }

    public function updateFromArray(Film $film, array $data)
    {
        $film->update($data);
        return $film;
    }

    public function findFilmByGenreAndSlug(string $genre, string $slug):Film
    {
        $film = Film::where('slug', $slug)->firstOrFail();
        $film->genres;
        //dd($film->genres);
        return $film;
    }


    public function getFilmByGenre($genre):Genre
    {

        $genre = Genre::where("slug",$genre)->firstOrFail();
        $genre->films;
        return $genre;
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
