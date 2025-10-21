<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\CollaborationController;
use App\Http\Controllers\HumanResourceController;
use App\Http\Controllers\MemberRequestController;
use App\Http\Controllers\BuildingMaterialPriceController;
use App\Http\Controllers\Admin\MemberManagementController;


Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['en', 'mn'])) {
        abort(400, 'Invalid language selection');
    }

    // Store in session
    session()->put('locale', $locale);

    // Store in cookie (5 years expiration)
    Cookie::queue('locale', $locale, 2628000);

    // Set for current request
    app()->setLocale($locale);

    return back()->with('success', __('Language changed successfully'));
})->name('lang.switch');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('about', [AboutController::class, 'about'])->name('about');
Route::get('warm-solution', function () {
    return view('warm-solution');
})->name('warm-solution');

Route::get('/posts/list', [PostController::class, 'list'])->name('posts.list');
Route::get('/posts/detail/{post}', [PostController::class, 'detail'])->name('posts.detail');
Route::get('/memberships/list', [MembershipController::class, 'list'])->name('memberships.list');
Route::get('/books/list', [BookController::class, 'list'])->name('books.list');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('human-resources', HumanResourceController::class);
    Route::resource('posts', PostController::class);
    Route::post('/upload-summernote-image', [PostController::class, 'upload'])->name('summernote.upload');
    Route::resource('memberships', MembershipController::class);
    Route::resource('building_material_prices', BuildingMaterialPriceController::class);
    Route::resource('books', BookController::class);
    Route::resource('users', UserController::class);
    Route::resource('collaborations', CollaborationController::class);
    Route::resource('member-requests', MemberManagementController::class);
});

// Public form submission
Route::get('/membership-request', [MemberRequestController::class, 'create'])->name('membership.request.create');
Route::post('/membership-request', [MemberRequestController::class, 'store'])->name('membership.request.store');


require __DIR__ . '/auth.php';
