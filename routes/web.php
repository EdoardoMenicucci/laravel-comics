<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/about', function () {
    $data = [
        'developer' => [
            'nome' => 'Edoardo',
            'cognome' => 'Menicucci',
            'professione' => 'WebDeveloper'
        ]
    ];

    return view('about', $data);
});
