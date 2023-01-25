<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function() {

    Route::get('/',           'home')->name('home');
    Route::get('blog',        'blog')->name('blog');
    Route::get('blog/{post:slug}', 'post')->name('post');

});
