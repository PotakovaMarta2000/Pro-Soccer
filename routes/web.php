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

Route::get('/', function () {
    $contact = \App\Models\Contact::all();
    $news = \App\Models\News::where('is_active', 1)->get();
    return view('home', 
    ['news'=> $news, 'contact'=>$contact]
);
});

Route::namespace('\App\Http\Controllers')->group (function() {
    Route::resource('news', NewsController::class)->only([
        'index',
        'show'
    ]);
    Route::resource('team', TeamMemberController::class)->only([
        'index',
        'show'
    ]);


Route::resource('match', MatchGameController::class)->only([
        'index',
        'show'
    ]);

Route::resource('gallery', GalleryController::class)->only([
        'index',
        'show'
    ]);
   
});