<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
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
        'posts' => Post::all()
     ]);
});

// {post} - is a wildcard
Route::get('posts/{post:slug}', function (Post $post) {
    return view('post',[
        /* Important: the variable name should be the same as in wildcard */
        'post' => $post 
    ]);
});
