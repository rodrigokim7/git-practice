<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "About Page";
});

Route::get('/reporting', function () {
    return "Reporting Feature";
});