<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('home');
});

Route::get('/contacts', function () {
    return view('contacts');
});
*/
/*Route::name('cms.')->group(function () {
    Route::prefix('{locale}/admin')->middleware([
        'auth',
        'shareCommonData:admin',
        'localize'
    ])->group(function () {
        Route::get('/', 'Admin\DashboardController')->name('dashboard');
        Route::resources([
            'films' => 'Admin\Films\FilmController',
            'pages' => 'Admin\Pages\PageController',
        ], []);
    });
});*/

Route::name('cms.')->group(function () {
    Route::prefix('admin')->middleware([
        'auth',
        'shareCommonData:admin',
    ])->group(function () {
        Route::get('/', 'Admin\DashboardController')->name('dashboard');
        Route::resources([
            'films' => 'Admin\Films\FilmController',
            'pages' => 'Admin\Pages\PageController',
        ], []);
    });
    Route::get('/account', 'AccountController@index')->name('account');
});

Route::get('/{genre}/{slug}', 'FilmController@show');


//Route::get('/category/{genre}', 'FilmController@showGenre');

//Route::get('/films/{category}/{slug}', 'FilmController@show')->name('films');

Route::get('/', 'HomeController@index');

Auth::routes();
