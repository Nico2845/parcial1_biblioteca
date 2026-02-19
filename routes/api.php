<?php

<<<<<<< HEAD
use App\Http\Controllers\BooksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::post('/books', [BooksController::class, 'store']);
    Route::get('/books',[BooksController::class, 'index']);
    Route::get('/books{loand_id}',[BooksController::class, 'index']);
   
});
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
>>>>>>> 40e4864e7cefe36cdfd91a38ee2ab72e4ff60ac5
