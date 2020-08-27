<?php

namespace App\Services\FilmsGenres;

use App\Models\FilmGenre;
use App\Services\FilmsGenres\Repositories\FilmGenreRepositoryInterface;
use App\Services\Genres\Repositories\GenreRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class FilmsGenresService
{

    /** @var FilmGenreRepositoryInterface */
    private $filmGenreRepository;

    public function __construct(
        FilmGenreRepositoryInterface $filmGenreRepository,
        GenreRepositoryInterface $genreRepository
    ) {
        $this->filmGenreRepository = $filmGenreRepository;
        $this->genreRepository = $genreRepository;
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
    public function getSelectGenreForFilm(int $filmId): array
    {
        $genres = $this->genreRepository->getList();
        $selectGenre = $this->filmGenreRepository->searchByFilmId($filmId)->toArray();
        $arGenres = [];
        foreach($genres as $item){
            $findGenre = array_search($item->id, array_column($selectGenre, 'genre_id'));
            if($findGenre!==false){
                $arGenres[] = [
                    "id"=>$item->id,
                    "name"=>$item->name,
                    "select"=>true
                ];
             }
             else{
                 $arGenres[] = [
                     "id"=>$item->id,
                     "name"=>$item->name,
                     "select"=>false
                 ];
             }
        }

        return $arGenres;
    }

}
