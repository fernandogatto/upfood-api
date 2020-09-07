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

Route::namespace('food')->group(function() {
    Route::post('/foods/create', 'FoodController@createFood')->name('foods.create');

    Route::get('/foods', 'FoodController@listAllFoods')->name('foods.listAll');
    Route::get('/foods/{food}', 'FoodController@showFood')->name('foods.show');

    Route::put('/foods/update/{food}', 'FoodController@updateFood')->name('foods.update');

    Route::delete('/foods/delete/{food}', 'FoodController@deleteFood')->name('foods.delete');
});
