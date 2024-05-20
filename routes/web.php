<?php

use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\InventorieController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\SolicitudController;
use App\Models\Inventorie;
use Illuminate\Console\View\Components\Alert;
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




Route::middleware('auth')->group(function () {


    Route::get('api', [SolicitudController::class, 'api']);




    //rutas de solicitud

    Route::prefix('solicitud')->group(function () {
        Route::get('alert', [SolicitudController::class, 'alert'])->name('solicitud.alert');
        Route::resource('solicitud', SolicitudController::class);
    });



    //rutas de Funcionario

    Route::prefix('funcionario')->group(function () {



        Route::get('alert', [FuncionarioController::class, 'alert'])->name('funcionario.alert');

        Route::get('tabla', [FuncionarioController::class, 'tabla'])->name('funcionario.tabla');

        Route::resource('funcionario', FuncionarioController::class);
    });


    //rutas de Inventario
   

    Route::prefix('inventario')->group(function () {

        // Route::get('tablaInventario', [InventorieController::class, 'tablaInventario'])->name('inventario.tablaInventario');

        Route::get('alert',[InventorieController::class,'alert'])->name('inventario.alert');

        Route::resource('inventario', InventorieController::class);
       
    });

    
});
