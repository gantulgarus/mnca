<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\HumanResourceController;
use App\Http\Controllers\BuildingMaterialPriceController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('warm-solution', function () {
    return view('warm-solution');
})->name('warm-solution');

Route::get('/posts/list', [PostController::class, 'list'])->name('posts.list');
Route::get('/posts/detail/{post}', [PostController::class, 'detail'])->name('posts.detail');
Route::get('/memberships/list', [MembershipController::class, 'list'])->name('memberships.list');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('human-resources', HumanResourceController::class);
    Route::resource('posts', PostController::class);
    Route::resource('memberships', MembershipController::class);
    Route::resource('building_material_prices', BuildingMaterialPriceController::class);
});

require __DIR__ . '/auth.php';
