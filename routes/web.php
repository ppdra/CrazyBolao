<?php

use App\Livewire\MatchesList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/matches', MatchesList::class);




Route::get('/ranking', function () {
    return view('ranking');
});


Route::get('/dede', function () {
    return view('welcome');
});
