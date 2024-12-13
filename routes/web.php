<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ImageController;



Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('index');
});
Route::get('/cv', function () {
    return view('cv');
});
Route::get('/projects-grid-cards', function () {
    return view('projects-grid-cards');
});
Route::get('/hire-me', function () {
    return view('hire-me');
});
Route::get('/project-page', [PageController::class, 'show']);
Route::get('/certificate', [ImageController::class, 'show']);