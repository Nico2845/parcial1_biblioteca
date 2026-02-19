<?php

use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::post('/books', [BooksController::class, 'store']);
    Route::get('/books',[BooksController::class, 'index']);
    Route::get('/books{loand_id}',[BooksController::class, 'index']);
   
});
