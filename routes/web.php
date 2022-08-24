<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\chartController;


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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/', [chartController::class, 'index']);

Route::controller(chartController::class)->group( function() {
    Route::get('/','index');
    Route::get('/chart','input')->name('chart');
    Route::get('/success','success')->name('success');
    Route::post('/save', 'save')->name('save')->middleware('validatechartMiddleware');
});

