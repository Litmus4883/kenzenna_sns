<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

# 以下、コントローラ名で昇順

# 投稿機能
Route::controller(PostController::class)->group(function() {
    # getメソッドの'/posts'のルーティング
    Route::get('/posts', 'index')->name('post_index');
    Route::get('/posts/create', 'create')->name('post_create');
    # postメソッドの'/posts'のルーティング
    Route::post('/posts', 'store')->name('post_store');
    # 暗黙の結合（ルートセグメント名＝変数名）
    # {post}には、変数の主キーが入る
    Route::get('/posts/{post}', 'show')->name('post_show');
    # 投稿編集画面の表示と更新
    Route::get('/posts/{post}/edit', 'edit')->name('post_edit');
    Route::put('/posts/{post}', 'update')->name('post_update');
    Route::delete('/posts/{post}', 'destory')->name('post_destory');
});

# リプライ機能
Route::post('/posts/{post}/reply', [ReplyController::class, 'store'])->name('reply_store');

# 認証機能
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
