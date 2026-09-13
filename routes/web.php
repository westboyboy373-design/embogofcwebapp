<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\FixturePhotoController;

// Public Homepage with Dynamic News Posts
Route::get('/', function () {
    $posts = DB::table('news_posts')->orderBy('created_at', 'desc')->take(3)->get();
    return view('welcome', compact('posts'));
});

// Dedicated News Portal Route (Updated to fetch posts)
Route::get('/news', function () {
    $posts = DB::table('news_posts')->orderBy('created_at', 'desc')->take(30)->get();
    return view('news', compact('posts'));
});

Route::view('/club', 'club');
Route::view('/contact', 'contact');
Route::view('/kits', 'kits');
Route::view('/league', 'league');
Route::view('/fixtures', 'fixtures');
Route::view('/admin', 'admin');

// Dashboard Route
Route::get('/dashboard', [NewsController::class, 'index'])->name('dashboard');

// News Management Actions
Route::post('/admin/news', [NewsController::class, 'store'])->name('admin.news.store');
Route::delete('/admin/news/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');

// Fixture Photos Management Actions
Route::post('/admin/fixtures', [FixturePhotoController::class, 'store'])->name('admin.fixtures.store');
Route::delete('/admin/fixtures/{id}', [FixturePhotoController::class, 'destroy'])->name('admin.fixtures.destroy');

?>