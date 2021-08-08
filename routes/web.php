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
// Route::get('/calc', [CalcController::class, 'index']);
Route::get('/calc', 'CalcController@index');
// 加1
// Route::post('plus1', [CalcController::class, 'plus1']);
Route::post('plus1', 'CalcController@plus1');
// 加10
// Route::post('plus10', [CalcController::class, 'plus10']);
Route::post('plus10', 'CalcController@plus10');
// 歸零
// Route::post('clear', [CalcController::class, 'clear']);
Route::post('clear', 'CalcController@clear');
// 加
// Route::post('plus', [CalcController::class, 'plus']);
Route::post('plus', 'CalcController@plus');
// 減
// Route::post('less', [CalcController::class, 'less']);
Route::post('less', 'CalcController@less');
// 乘
// Route::post('Multiply', [CalcController::class, 'Multiply']);
Route::post('Multiply', 'CalcController@Multiply');
// 除
// Route::post('divide', [CalcController::class, 'divide']);
Route::post('divide', 'CalcController@divide');