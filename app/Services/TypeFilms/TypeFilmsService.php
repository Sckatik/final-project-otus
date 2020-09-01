<?php

namespace App\Services\TypeFilms;

use App\Models\TypeFilm;
use App\Services\TypeFilms\Repositories\TypeFilmRepositoryInterface;
use App\Services\Films\Repositories\FilmRepositoryInterface;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class TypeFilmsService
{

    /** @var TypeFilmRepositoryInterface */
    private $typeFilmRepository;
    /** @var FilmRepositoryInterface */
    private $filmRepository;

    public function __construct(
        TypeFilmRepositoryInterface $typeFilmRepository,
        FilmRepositoryInterface $filmRepository
    ) {
        $this->typeFilmRepository = $typeFilmRepository;
        $this->filmRepository = $filmRepository;
    }

    public function indexTypeFilm($filmId): Array
    {
        $typeFilms = $this->typeFilmRepository->getAllList();
        $selectFilm = $this->filmRepository->find($filmId);

        $arTypeFilms = [];
        foreach($typeFilms as $item){
            /*$findFilm = array_search($item->id, array_column($selectFilm, 'type'));*/
            if($selectFilm->type==$item->id){
                $arTypeFilms[] = [
                    "id"=>$item->id,
                    "name"=>$item->name,
                    "select"=>true
                ];
             }
             else{
                 $arTypeFilms[] = [
                     "id"=>$item->id,
                     "name"=>$item->name,
                     "select"=>false
                 ];
             }
        }
        return $arTypeFilms;
    }


    public function allTypeFilm():Collection
    {
        return $this->typeFilmRepository->getAllList();
    }

   
    /**
     * @param array $data
     * @return TypeFilm
     */
    public function createFilm(array $data): TypeFilm
    {
        return $this->typeFilmRepository->createFromArray($data);
    }

    /**
     * @param TypeFilm $typeFilm
     * @param array $data
     * @return TypeFilm
     */
    public function updateTypeFilm(TypeFilm $typeFilm, array $data): TypeFilm
    {
        return $this->typeFilmRepository->updateFromArray($typeFilm, $data);
    }
}
