<?php

use Illuminate\Support\Facades\Route;

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

// Home dengan route biasa
Route::get('/', function () {
    return redirect('https://www.educastudio.com/');
});

// Product dengan route prefix
Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('/marbel-and-friends-kids-games', function(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/riri-story-books', function(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('/kolak-kids-songs', function(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

// News dengan route param
Route::get('/news', function(){
    return redirect('https://www.educastudio.com/news');
});
Route::get('news/{title}', function($title){
    return redirect('https://www.educastudio.com/news' .$title);
});

// Program dengan route prefix
Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

// About us dengan route biasa
Route::get('/about-us', function(){
    return redirect('https://www.educastudio.com/about-us');
});

// Contact us dengan route resource only
Route::resource('/contact-us', ProgramController::class)->only([
    'index', 'show'
]);