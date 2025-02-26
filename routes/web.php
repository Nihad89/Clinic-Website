<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\AuditLogController;
use App\Http\Controllers\PackageController;
use Illuminate\Support\Facades\Route;



// Register and Login Show Blade
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');


// ALL THE SHOW BLADE


Route::get('/', [BannerController::class, 'show']);

// BANGLA
Route::get('/b_sandhani', [BannerController::class, 'show_b']);


Route::get('show_test', [TestController::class, 'show']);
Route::get('show_job', [JobController::class, 'show']);
Route::get('show_package', [PackageController::class, 'show']);
Route::get('show_doctor', [DoctorController::class, 'show']);
Route::get('show_gallery', [GalleryController::class, 'show']);
Route::get('show_notice', [NoticeController::class, 'show']);
Route::get('about', [BannerController::class, 'about_us']);
Route::get('contact', [BannerController::class, 'contact_us']);



// DASH BOARD

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Authenticator

Route::middleware('auth')->group(function () {


// NOTICE

Route::get('notice', [NoticeController::class, 'index']);
Route::get('add-notice', [NoticeController::class, 'create']);
Route::post('add-notice', [NoticeController::class, 'store']);
Route::delete('delete-notice/{id}', [NoticeController::class, 'destroy']);




Route::get('deleted_notices', [NoticeController::class, 'showDeletedNotices']);

// BANNER

Route::get('banner', [BannerController::class, 'index']);
Route::get('add-banner', [BannerController::class, 'create']);
Route::post('add-banner', [BannerController::class, 'store']);
Route::delete('delete-banner/{id}', [BannerController::class, 'destroy']);


// PACKAGE

Route::get('package', [PackageController::class, 'index']);
Route::get('add-package', [PackageController::class, 'create']);
Route::post('add-package', [PackageController::class, 'store']);
Route::delete('delete-package/{id}', [PackageController::class, 'destroy']);


//TEST
Route::get('test', [TestController::class, 'index']);
Route::get('add-test', [TestController::class, 'create']);
Route::post('add-test', [TestController::class, 'store']);
Route::get('edit-test/{id}', [TestController::class, 'edit']);
Route::put('update-test/{id}', [TestController::class, 'update']);
Route::delete('delete-test/{id}', [TestController::class, 'destroy']);


//DOCTOR
Route::get('doctor', [DoctorController::class, 'index']);
Route::get('add-doctor', [DoctorController::class, 'create']);
Route::post('add-doctor', [DoctorController::class, 'store']);
Route::get('edit-doctor/{id}', [DoctorController::class, 'edit']);
Route::put('update-doctor/{id}', [DoctorController::class, 'update']);
Route::delete('delete-doctor/{id}', [DoctorController::class, 'destroy']);
Route::get('/doctor/{id}', [DoctorController::class, 'show'])->name('show_doctor');



// JOB
Route::get('job', [JobController::class, 'index']);
Route::get('add-job', [JobController::class, 'create']);
Route::post('add-job', [JobController::class, 'store']);
Route::get('edit-job/{id}', [JobController::class, 'edit']);
Route::put('update-job/{id}', [JobController::class, 'update']);
Route::delete('delete-job/{id}', [JobController::class, 'destroy']);



// GALLERY

Route::get('gallery', [GalleryController::class, 'index']);
Route::get('add-gallery', [GalleryController::class, 'create']);
Route::post('add-gallery', [GalleryController::class, 'store']);
Route::get('edit-gallery/{id}', [GalleryController::class, 'edit']);
Route::put('update-gallery/{id}', [GalleryController::class, 'update']);
Route::delete('delete-gallery/{id}', [GalleryController::class, 'destroy']);



//PROFILE

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
