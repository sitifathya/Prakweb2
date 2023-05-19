<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\formcontroller;
use App\Http\Controllers\ForminputController;


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

Route::get('/salam',function(){
    return view('salam', [
        "nama" =>"patia",
        "umur" =>20
    ]); 
});

Route::get('/nilai',function(){
    return view('nilai');
});
 
Route::get('/form_periksa',function(){
    return view('form_periksa');
});


Route::get('/form',[formcontroller::class,'index']);
Route::post('/hasil',[formcontroller::class,'hasil']);

Route::get('/form_input',[ForminputController::class,'index']);
Route::post('/input',[ForminputController::class,'input']);

