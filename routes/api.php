<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\TikectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//gestionamos los compradores de boletos
Route::resource('buyers', BuyerController::class)->except(["create","edit"]);


Route::group(['prefix' => 'tikects'], function () {
    
    Route::resource('', TikectController::class)->except(["create","edit"]);
    Route::post('assing',[TikectController::class,"assing"]);

});