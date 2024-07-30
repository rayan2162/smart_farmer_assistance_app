<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\MailController;



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


// Weather Features Complete Routes
Route::get('/weather', [WeatherController::class, 'show'])->name('weather.show');

Route::post('/get_weather', [WeatherController::class, 'fetch'])->name('weather.fetch');


// Mail Features Complete Routes
Route::get('/send-email', [MailController::class, 'create']);

Route::post('/send-email', [MailController::class, 'send']);


