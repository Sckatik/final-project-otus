<?php

namespace App\Services\Films\Handlers;


use App\Models\Film;
use App\Services\Films\Repositories\EloquentFilmRepository;

class CreateFilmHandler
{

    private $filmRepository;

    public function __construct(
        EloquentFilmRepository $filmRepository
    )
    {
        $this->filmRepository = $filmRepository;
    }

    /**
     * @param array $data
     * @return Film
     */
    public function handle(array $data): Film
    {
        if(isset($data['image'])){
            // Имя и расширение файла
            $filenameWithExt = $data['image']->getClientOriginalName();
            // Только оригинальное имя файла
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Расширение
            $extention = $data['image']->getClientOriginalExtension();
            // Путь для сохранения
            $fileNameToStore = "image_poster/".$filename."_".time().".".$extention;
            // Сохраняем файл
            $path = $data['image']->storeAs('public/', $fileNameToStore);
            $data['image'] = $fileNameToStore;
        }
        return $this->filmRepository->createFromArray($data);
    }

}
