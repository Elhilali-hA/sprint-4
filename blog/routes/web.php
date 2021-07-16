<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\testcontroller;
use App\Models\Post;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome')->with('var1', '2eme methode');
});


// logout
Route::get('/logout', function(){
    Auth::logout();

    return view('welcome');
}); 

Route::get('/test', [testcontroller::class, 'test']); 

Auth::routes();


// Route::get('/post/create', [
    //     //  'uses' => 'PostsController@create',
    //     //  'as'  => 'post.create'
// ]);

Route::get('/home', [App\Http\Controllers\PostsController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function() {    
    Route::get('/post/create', [App\Http\Controllers\PostsController::class, 'create'])->name('create');
    Route::post('/post/store', [App\Http\Controllers\PostsController::class, 'store'])->name('post.store');
    Route::get('/posts', [App\Http\Controllers\PostsController::class, 'index'])->name('posts');
    Route::get('/post/edit/{id}', [App\Http\Controllers\PostsController::class, 'edit'])->name('post.edit');
    Route::post('/post/update/{id}', [App\Http\Controllers\PostsController::class, 'update'])->name('post.update');
    Route::get('/post/delete/{id}', [App\Http\Controllers\PostsController::class, 'destroy'])->name('post.delete');
    Route::get('/category/create', [App\Http\Controllers\CategoriesController::class, 'create'])->name('creer');
    Route::post('/category/store', [App\Http\Controllers\CategoriesController::class, 'store'])->name('store');
    Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');
    Route::get('/category/delete/{id}', [App\Http\Controllers\CategoriesController::class, 'destroy'])->name('delete');
    Route::get('/category/edit/{id}', [App\Http\Controllers\CategoriesController::class, 'edit'])->name('edit');
    Route::post('/category/update/{id}', [App\Http\Controllers\CategoriesController::class, 'update'])->name('update');
    
});


