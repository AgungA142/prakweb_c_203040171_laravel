<?php


use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;



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
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => "about",
        "nama" => "Agung Alfatah",
        "email" => "Agung.alfatah43@gmail.com",
        "image" => "1.jpg"


    ]);
});

Route::get('/blog', [PostController::class, 'index']);


//halaman post single
Route::get('posts/{post:slug}', [PostController::class, 'show']);

//halaman categories
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post categories',
        'active' => "categories",
        'categories' => Category::all()


    ]);
});


//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

//dashboard

Route::get('dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

//dashboard post
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug']);
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

//AdminCategoryController

Route::resource('dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');



//halaman category
// Route::get('/categories/{category:slug}', function(Category $category) {
//     return view('posts', [
//         'title' =>"Post By category :$category->name",
//         'active' =>"categories",
//         'posts' =>$category->posts->load(['category', 'author']),

//     ]);
// });


// //halaman User
// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' =>"Post By Author : $author->name",
//         'active' =>"blog",
//         'posts' => $author-> posts ->load(['category', 'author'])

//     ]);
// });
