<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CropController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AllUserController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\LivestockController;
use App\Http\Controllers\AgroforestryController;


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

//AgroForestry Features Complete Routes
    Route::resource('agroforestry', AgroforestryController::class);
    Route::get('agroforestry/{id}/edit', [AgroforestryController::class, 'edit'])->name('agroforestry.edit');
    Route::put('agroforestry/{id}', [AgroforestryController::class, 'update'])->name('agroforestry.update');
    Route::delete('/agroforestry/{id}', [AgroforestryController::class, 'destroy'])->name('agroforestry.destroy');

//Livestock Features Complete Routes
    Route::resource('livestock', LivestockController::class);
    Route::get('livestock/{id}/edit', [LivestockController::class, 'edit'])->name('livestock.edit');
    Route::put('livestock/{id}', [LivestockController::class, 'update'])->name('livestock.update');
    Route::delete('livestock/{id}', [LivestockController::class, 'destroy'])->name('livestock.destroy');
    

//Equipment Features Complete Routes
    Route::resource('equipment', EquipmentController::class);
    Route::get('equipment/{id}/edit', [EquipmentController::class, 'edit'])->name('equipment.edit');
    Route::put('equipment/{id}', [EquipmentController::class, 'update'])->name('equipment.update');
    Route::delete('equipment/{id}', [EquipmentController::class, 'destroy'])->name('equipment.destroy');


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
