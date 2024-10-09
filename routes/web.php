<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Ariel','title'=>'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts'=> Post::all()]);
});

Route::get('/posts/{post:slug}', function (Post $post) {
        // $post = Post::find($slug);

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user}', function (User $user) {
    return view('posts', ['title' => 'Articles by '.$user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category}', function (Category $category) {
    return view('posts', ['title' => 'Category '.$category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
