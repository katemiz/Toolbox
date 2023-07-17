<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::middleware(['auth'])->group(function () {


    // Calculate
    Route::get('/calculate', function () {
        return view('calculate');
    });

    Route::get('/calculate/wind-force', function () {
        return view('calculate-windforce');
    });



// });

