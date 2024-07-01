<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    /*$data = [
        'developer' => [
            'nome' => 'Edoardo',
            'cognome' => 'Menicucci',
            'professione' => 'WebDeveloper'
        ]
    ];*/

    $data = config("store");
    // DO UN NOME ALL'ARRAY VISTO CHE NON E' ASSOCIATIVO
    return view('home', ['data' => $data]);
});

Route::get('/home', function () {
    /*$data = [
        'developer' => [
            'nome' => 'Edoardo',
            'cognome' => 'Menicucci',
            'professione' => 'WebDeveloper'
        ]
    ];*/

    $data = config("store");

    return view('home', ['data' => $data]);
})->name('home');

Route::get('/about', function () {
    $data = [
        'developer' => [
            'nome' => 'Edoardo',
            'cognome' => 'Menicucci',
            'professione' => 'WebDeveloper'
        ]
    ];

    return view('about', $data);
})->name('about');;

Route::get('/comics/{index}', function ($index) {
    $data = config("store");
    if (array_key_exists($index, $data)) {
        $fumetto = ['fumetto' => $data[$index]];
        return view('fumettoSingolo', $fumetto);
    } else {
        return view('home', ['data' => $data]);
    }
})->name('fumetto');
