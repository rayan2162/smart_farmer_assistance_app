<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Landing Page
Route::get('/', function () {
    return view('indexPage');
});

// Feature page
Route::get('/crop', function () {
    return view('crop.cropPage');
});

Route::get('/agroforestry', function () {
    return view('agroforestry.agroForestryPage');
});

Route::get('/equipment', function () {
    return view('equipment.equipmentPage');
});

Route::get('/livestock', function () {
    return view('livestock.livestockPage');
});

Route::get('/notice', function () {
    return view('notice.noticePage');
});

Route::get('/silo', function () {
    return view('silo.siloPage');
});
Route::get('/weather', function () {
    return view('weather.weatherPage');
});