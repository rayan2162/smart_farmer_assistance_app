<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CropController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\AllUserController;


Auth::routes();


// Landing Page
Route::get('/', function () {
    return view('indexPage');
});

// Mail Features Complete Routes
Route::get('/send-email', [MailController::class, 'create']);

Route::post('/send-email', [MailController::class, 'send']);


// User
Route::middleware(['auth'])->group(function () {
    
    Route::get('/home', function () {
        return view('user.dashboard');
    })->name('home');

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

// Crop Features Complete Routes
    Route::resource('crop', CropController::class);
    Route::get('crop/{id}/edit', [CropController::class, 'edit'])->name('crop.edit');
    Route::put('crop/{id}', [CropController::class, 'update'])->name('crop.update');

});


// Admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Unapproved users
    Route::get('admin/users', [ApprovalController::class, 'index'])->name('admin.users');
    Route::post('admin/users/approve/{id}', [ApprovalController::class, 'approve'])->name('admin.users.approve');

    // All Approved users
    Route::get('admin/all-users', [AllUserController::class, 'index'])->name('admin.all-users');
    Route::get('admin/users/{id}/edit', [AllUserController::class, 'edit'])->name('admin.users.edit');
    Route::post('admin/users/{id}', [AllUserController::class, 'update'])->name('admin.users.update');
    Route::delete('admin/users/{id}', [AllUserController::class, 'destroy'])->name('admin.users.destroy');

    
});
