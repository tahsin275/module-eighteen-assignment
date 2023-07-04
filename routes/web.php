<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActionController;


Route::controller(ActionController::class)->group(function () {
    Route::get('/postData', 'postData');
    Route::get('/categoryPost/{id}', 'categoryPost');
    Route::get('/posts/{id}/delete', 'softDelete');
    Route::get('/softData', 'softData');
    Route::get('/categories/{id}/posts', 'specificCatPost');
    Route::get('/categories/{id}/latestpost',  'latestPost');
    Route::get('/categories',  'CategoriesLatestPosts');
});





