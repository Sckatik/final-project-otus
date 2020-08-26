<?php

namespace App\Http\ViewComposers;

use App\MenuItem;
use Illuminate\View\View;
use App\Services\Genres\GenresService;

class NavigationComposer
{

    public function __construct(
        GenresService $genresService
    ) {
        $this->genresService = $genresService;
    }

    public function compose(View $view)
    {
        $genres = $this->genresService->getGenres();
        return $view->with('genres',  $genres);
    }
}