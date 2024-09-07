<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('V1')->group(function () {
    
    // Route::controller(AuthorController::class)->group(function () {
    //     Route::get('authors','index');
    //     Route::get('authors_details/{author?}','show');
    //     Route::put('authors/{author}','update');
    //     Route::delete('authors/{author}','destroy');
    //     Route::post('authors','store');
    // });
    Route::apiResources([
        'authors' => AuthorController::class,
        'posts' => PostController::class,
    ]);

    // Route::resource('authors',AuthorController::class);
    // Route::resource('posts',PostController::class);
});




