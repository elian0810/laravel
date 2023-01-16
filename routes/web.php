<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\appoimentController;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('event.index');
});
Auth::routes();

#ruta que lista todas nustras citas
// Route::group(['prefix' => 'event'], function () {
Route::group(['middleware' => ['auth']], function () {
    Route::resource('appoiment', appoimentController::class);

    Route::post('/appoiment', [appoimentController::class, 'index',])->name('appoiment_index');
    #ruta que lista nustra cita por id
    Route::put('/appoiment/show', [appoimentController::class, 'show'])->name('appoiment_show');
    #ruta que actuliza nuestroas citas
    Route::delete('/appoiment/update', [appoimentController::class, 'update'])->name('appoiment_destroy');
    #ruta que crea nuestroas citas
    Route::post('/appoiment/create', [appoimentController::class, 'store'])->name('appoiment_store');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


});
