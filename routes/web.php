<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalcController;

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
    return view('welcome');
});
Route::get('/calc', [CalcController::class, 'index']);
// 加1
Route::post('plus1', [CalcController::class, 'plus1']);
// 加10
Route::post('plus10', [CalcController::class, 'plus10']);
// 歸零
Route::post('clear', [CalcController::class, 'clear']);
// 加
Route::post('plus', [CalcController::class, 'plus']);
// 減
Route::post('less', [CalcController::class, 'less']);
// 乘
Route::post('Multiply', [CalcController::class, 'Multiply']);
// 除
Route::post('divide', [CalcController::class, 'divide']);