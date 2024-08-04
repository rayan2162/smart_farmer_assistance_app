<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\CropController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\ApprovalController;


Auth::routes();


// Landing Page
Route::get('/', function () {
    return view('indexPage');
});

// Mail Features Complete Routes
Route::get('/send-email', [MailController::class, 'create']);
Route::post('/send-email', [MailController::class, 'send']);


// User Auth Group
Route::middleware(['auth'])->group(function () {
    
// Temporary Routes For frontend develeopement
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

// Notice Feature VIEW for user
    Route::get('/user-notice', function () {
        $notices = DB::table('notices')->get();
        return view('notice.userNotice', compact('notices'));
    });

});


// Admin
Route::middleware(['auth', 'admin'])->group(function () {
    
// Admin Dashboard
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
    
// Notice Features Complete Routes
    Route::resource('notice', NoticeController::class);
    Route::get('notice/{id}/edit', [NoticeController::class, 'edit'])->name('notice.edit');
    Route::put('notice/{id}', [NoticeController::class, 'update'])->name('notice.update');
    Route::get('notice/download/{file}', [NoticeController::class, 'download'])->name('notice.download');

});
