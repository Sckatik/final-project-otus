<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Services\Films\FilmsService;
use App\Services\Genres\GenresService;
use View;
use Illuminate\Pagination\Paginator;
use Cache;

class HomeController extends Controller
{

    protected $filmsService;

    public function __construct(
        FilmsService $filmsService,
        GenresService $genresService
    ) {
        $this->filmsService = $filmsService;
        $this->genresService = $genresService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $filmsInSlider = $this->filmsService->filmsInSlider();
        return view('home', [
            'filmsInSlider' => $filmsInSlider
        ])->render();
    }
}
