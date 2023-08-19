<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\Calculation;
use App\Http\Livewire\Articles;

use App\Http\Controllers\MailController;
use App\Http\Controllers\EndProductController;

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



Route::get('/lwdeneme', function () {
    return view('lwdeneme');
});



// Route::middleware(['auth'])->group(function () {


    // Calculate
    // Route::get('/calculate', function () {
    //     return view('calculate');
    // });

    Route::get('/calculate', Calculation::class);


    Route::get('/calculate/wind-force', function () {
        return view('calculate-windforce');
    });

    Route::get('/calculate/area-inertia', function () {
        return view('calculate-area-inertia');
    });


    Route::get('/articles', Articles::class);
    Route::get('/articles/{idArticle}', Articles::class);


    Route::get('/endproducts', function () {
        return view('end_product.ep-list');
    });
    Route::get('/endproducts/{id}', [EndProductController::class,'view']);
    Route::get('/endproducts-form/{id?}', [EndProductController::class,'form']);
    Route::post('/endproducts-store/{id?}', [EndProductController::class,'store']);



    // MAIL
    Route::get('send-mail', [MailController::class, 'index']);



// });

