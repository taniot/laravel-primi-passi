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
*/

Route::get('/', function () {

    $data = [
        'title' => 'Home Page',
        'students' => [

        ]
    ];

    return view('home', $data);
});


Route::get('/about', function(){

    $data = [
        'title' => 'About',
        'students' => [
            'Cosimo',
            'Emanuele',
            'Eugenia',
            'Giorgia'
        ]
    ];

    return view('about', $data);
});

Route::get('/contact', function(){

    $data = [
        'title' => 'Contact',
        'students' => [

        ]
    ];

    return view('contact', $data);
});

