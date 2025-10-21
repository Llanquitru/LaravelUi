<?php

<<<<<<< HEAD
use App\Http\Controllers\AgrupadoController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\GabineteController;
use App\Http\Controllers\InsumoController;
use App\Http\Controllers\InventorieController;
use App\Http\Controllers\MauseController;
use App\Http\Controllers\PantallaController;
use App\Http\Controllers\ParlanteController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\TecladoController;
use App\Models\Funcionario;
use App\Models\Inventorie;
use App\Models\Parlante;
use Illuminate\Console\View\Components\Alert;
=======
use App\Http\Controllers\FuncionarioConstroller;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\SolicitudController;
use App\Models\Funcionario;
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
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
<<<<<<< HEAD
    return view('auth.login');
=======
    return view('welcome');
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('solicitud/{solicitud:slug}',[SolicitudController::class,'show'])->name('solicitud.show');

<<<<<<< HEAD



Route::middleware('auth')->group(function () {


    Route::get('api', [SolicitudController::class, 'api']);




    //rutas de solicitud
    Route::resource('solicitud', SolicitudController::class);
    Route::prefix('solicitud')->group(function () {
        Route::get('alert', [SolicitudController::class, 'alert'])->name('solicitud.alert');
        
    });



    //rutas de Funcionario

     Route::prefix('funcionario')->group(function () {

       Route::resource('funcionario', FuncionarioController::class);

     Route::get('alertaFuncionario',[FuncionarioController::class, 'alertaFuncionario'])->name('funcionario.alertaFuncionario');
       
       });
  

   
   
    //rutas de Inventario
   
    Route::resource('insumo', InsumoController::class);
    // Route::prefix('insumo')->group(function () {
        
    //     // // Route::get('tablaInventario', [InventorieController::class, 'tablaInventario'])->name('inventario.tablaInventario');

    //     // Route::get('alert',[InventorieController::class,'alert'])->name('inventario.alert');

        
       
    // });

  //ruta calendario
    Route::resource('calendario', CalendarioController::class);
    //mirella manrique

    //ruta de pantallas

    Route::resource('pantallas',PantallaController::class);


    //rutas de los gabinetes


    Route::resource('gabinetes',GabineteController::class);

    


      Route::get('/search',[GabineteController::class,'search'])->name('gabinetes.search');

   
   

    //teclado

    Route::resource('teclados', TecladoController::class);


    //ratones

    Route::resource('mauses', MauseController::class);

    //parlantes
     Route::resource('parlantes', ParlanteController::class);


     // rutan de agrupado


     Route::resource('agrupados', AgrupadoController::class);



=======
//con esta ruta valido que esten logiado
Route::middleware('auth')->group(function () {



    //con esta ruta le doy un prefijo a la ruta , ruta del funcionario
   
   

    

    //
    Route::resource('solicitud', SolicitudController::class);
    //Route::get('solicitud/alert',SolicitudController::class)->name('solicitud.alert');
   
    Route::resource('funcionario',FuncionarioConstroller::class);
    Route::prefix('funcionario')->group(function(){
       
    });
>>>>>>> 4beb037a671533b2d5a2caf86815d2595a9a6660
});
