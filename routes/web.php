<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('/home', 'home')->name('home');
Route::view('/hub', 'hub')->name('hub');


Route::get('/changeLange/{lang}', function($lang){
    if(in_array($lang, ['en', 'es'])){
        session()->put('lang', $lang);
    }

    return back();
})->name('changeLange');
