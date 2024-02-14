<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

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
     return view('posts', [
        'posts' => Post::latest()->get()
     ]);
});

// {post} - is a wildcard
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post',[
        /* Important: the variable name should be the same as in wildcard */
        'post' => $post 
    ]);
});

 Route::get('categories/{category:slug}', function (Category $category) {
     return view('posts', [
        'posts' => $category -> posts
      ]);
 });

 Route::get('authors/{author}}', function (User $author) {
    return view('posts', [
       'posts' => $author -> posts
     ]);
});