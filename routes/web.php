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
    $contacts = \App\Models\Contact::all();
    $news = \App\Models\News::where('is_active', 1)->get();
    $lastNews = \App\Models\News::latest('created_at')->first();
    $lastMatch = \App\Models\MatchGame::latest('created_at')->first();
    $title = 'Главная';
    return view('home', 
    [
        'news'=> $news,
        'lastNews' => $lastNews,
        'contacts'=>$contacts,
        'lastMatch' => $lastMatch,
        'title' => $title
    ]
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