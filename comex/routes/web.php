<?php

use App\Http\Controllers\CategoriasController;
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
    return redirect('categorias');
});

Route::resource('categorias', CategoriasController::class)
    ->only(['index','create','store']);

Route::post('/categorias/destroy/{id}', [CategoriasController::class,'destroy'])
    ->name('categorias.destroy');
/*
Route::get('/categorias',[CategoriasController::class,'index'])->name('categorias.index');
Route::get('/categorias/create',[CategoriasController::class,'create'])->name('categorias.create');
Route::post('/categorias',[CategoriasController::class,'store'])->name('categorias.store');
*/
