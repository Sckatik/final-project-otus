<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Services\Films\FilmsService;
use View;
use Illuminate\Pagination\Paginator;
use Cache;

class FilmController extends Controller
{
    protected $filmsService;

    public function __construct(
        FilmsService $filmsService
    ) {
        $this->filmsService = $filmsService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /*
    Без кеша
    public function index(Request $request)
    {
        $films = $this->filmsService->indexFilm();

        View::share([
            'films' => $films,
        ]);
        return view('films.index');
    }
     */
    public function index(Request $request)
    {
        $key = $request->getUri();
        return Cache::remember($key, 60, function () {
            $genreFilm = $this->filmsService->indexFilm();
            return view('films.index', [
                 'genreFilm' => $genreFilm,
             ])->render();
        });
    }

    public function show($genre,$slug)
    {
        $show = $this->filmsService->show($genre, $slug);

        if($genre=="category"){
            return view('films.index', [
                'genreFilm' => $show
            ])->render();

        }
        else{
            return view('film.index', [
                'film' => $show,
            ])->render();
        }
    }
}
