<?php

namespace App\Services\FilmsGenres;

use App\Models\FilmGenre;
use App\Services\FilmsGenres\Repositories\FilmGenreRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class FilmsGenresService
{

    /** @var FilmGenreRepositoryInterface */
    private $filmGenreRepository;

    public function __construct(
        FilmGenreRepositoryInterface $filmGenreRepository
    ) {
        $this->filmGenreRepository = $filmGenreRepository;
    }

    /**
     * @param int $id
     * @return Film|null
     */
    public function findGenre(int $id)
    {
        return $this->filmGenreRepository->find($id);
    }

    /**
     * @param int $filmId
     * @param array $genres
     * @return array
     */
    public function updateFilmGenre(int $filmId, array $genres): array
    {
       // $find = $this->filmGenreRepository->searchByFilmId($filmId);
        $flight = FilmGenre::where('film_id', $filmId)->delete();

        $updateAr = [];
        foreach($genres as $item){
            FilmGenre::where('film_id', $filmId)->updateOrCreate(['film_id'=>$filmId,'genre_id' => $item]);
        }

        return $updateAr;
    }

    /**
     * возвращает выбранные жанры для конкретного фильма
     *
     * @param array $genres
     * @param integer $filmId
     * @return array
     */
    public function getSelectGenreForFilm(array $genres, int $filmId): array
    {
        $selectGenre = $this->filmGenreRepository->searchByFilmId($filmId)->toArray();
        $arGenres = [];
        foreach($genres as $id=>$item){
            $findGenre = array_search($id, array_column($selectGenre, 'genre_id'));
            if($findGenre!==false){
               $arGenres[] = [
                   "id"=>$id,
                   "name"=>$item,
                   "select"=>true
               ];
            }
            else{
                $arGenres[] = [
                    "id"=>$id,
                    "name"=>$item,
                    "select"=>false
                ];
            }
        }

        return $arGenres;
    }

}
