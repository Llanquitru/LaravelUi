<?php

use App\Http\Controllers\FuncionarioConstroller;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\SolicitudController;
use App\Models\Funcionario;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('solicitud/{solicitud:slug}',[SolicitudController::class,'show'])->name('solicitud.show');

//con esta ruta valido que esten logiado
Route::middleware('auth')->group(function () {



    //con esta ruta le doy un prefijo a la ruta , ruta del funcionario
   
   

    

    //
    Route::resource('solicitud', SolicitudController::class);
    //Route::get('solicitud/alert',SolicitudController::class)->name('solicitud.alert');
   
    Route::resource('funcionario',FuncionarioConstroller::class);
    Route::prefix('funcionario')->group(function(){
       
    });
});
