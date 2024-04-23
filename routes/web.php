<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PhotoDataController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [GalleryController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'gallery']);
Route::get('/initial-view/detailalbum', [GalleryController::class, 'detail_album']);
Route::get('/initial-view/detail', [GalleryController::class, 'detail_photo']);

// Route::group(['middleware' => 'prevent-back-history'],function(){
//     Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');

//     Route::get('/photo-data', [PhotoDataController::class, 'index'])->middleware('auth');

//     Route::get('/profile', [DashboardController::class, 'profile'])->middleware('auth');
//     Route::get('/initial-view/detail-photo/{photoId}', [photoDataController::class, 'show']);

//     Route::resource('/dashboard/photo-data', PhotoDataController::class)->middleware('auth');

//     Route::resource('/dashboard/album', AlbumController::class)->middleware('auth');
// });
