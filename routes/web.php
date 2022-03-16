<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\traitement@index');
Route::get('/pop', 'App\Http\Controllers\traitement@pop');
Route::get('/contact', 'App\Http\Controllers\traitement@contact');

