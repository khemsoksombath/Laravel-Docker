<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::controller(CategoryController::class)->prefix('categories')->group(function() {

    Route::get('/', 'getCategories');
    Route::post('/', 'createCatagory');
    Route::get('/{categoryId}', 'getCategory');
    Route::patch('/{categoryId}', 'updateCategoy');
    Route::delete('/{categoryId}', 'deleteCategory');

});