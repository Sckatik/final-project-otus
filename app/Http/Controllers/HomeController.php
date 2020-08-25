<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Services\Films\FilmsService;
use View;
use Illuminate\Pagination\Paginator;
use Cache;

class HomeController extends Controller
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
    public function index()
    {
        //dd($this->filmsService->getFilmByGenre('test'));
        return view('home');
    }
}
