<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|Aquí es donde puede registrar rutas web para su aplicación. Estas
| las rutas son cargadas por el RouteServiceProvider dentro de un grupo que
| contiene el grupo de middleware "web". ¡Ahora crea algo grandioso!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/t', function () {
    return view('app');
});

Route::post('/tareas',[TodosController::class,'store'])->name('todos');

Route::get('/tareas',[TodosController::class,'index'])->name('todos');

Route::get('/tareas/{id}', [TodosController::class , 'show'])->name('todos-edit');

Route::patch('/tareas/{id}',[TodosController::class,'update'])->name('todos-update');

Route::delete('/tareas/{id}',[TodosController::class,'destroy'])->name('todos-destroy');

Route::get('nosotros/{nombre?}',function($nombre = null){
    $equipo = ['Ixchell', 'Emma', 'Melani','Sara'];
   // return view('nosotros',['equipo'=>$equipo]);
   return view('nosotros',compact('equipo','nombre'));
})->name('nosotros');

