<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('chi-siamo', function () {
    return view('about-us');
});

Route::get('contatti', function () {
    return view('contatti');
});