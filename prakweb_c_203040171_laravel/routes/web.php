<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Agung Alfatah",
        "email" => "Agung.alfatah43@gmail.com",
        "image" => "1.jpg"


    ]);
});

Route::get('/blog', [PostController::class, 'index']);


//halaman post single
Route::get('posts/{post:slug}',[PostController::class, 'show']);

//halaman categories
Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post categories',
        'categories' =>Category::all()


    ]);
});
//halaman category
Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' =>"Post By category :$category->name",
        'posts' =>$category->posts->load(['category', 'author']),

    ]);
});


//halaman User
Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' =>"Post By Author : $author->name",
        'posts' => $author-> posts ->load(['category', 'author'])

    ]);
});



