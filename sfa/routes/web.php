<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WeatherController;


// Temporary routes for frontend
// ----------------------------------------------------------------
Route::get('/', function () {
    return view('indexPage');
});

Route::get('/notice', function () {
    return view('notice.noticePage');
});

Route::get('/crop', function () {
    return view('crop.cropPage');
});

Route::get('/agroforestry', function () {
    return view('agroforestry.agroForestryPage');
});

Route::get('/livestock', function () {
    return view('livestock.livestockPage');
});

Route::get('/silo', function () {
    return view('silo.siloPage');
});

Route::get('/equipment', function () {
    return view('equipment.equipmentPage');
});

Route::get('/create', function () {
    return view('demoCreate');
});



// Backend done
// ----------------------------------------------------------------
Route::get('/weather', [WeatherController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
