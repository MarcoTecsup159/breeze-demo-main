<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/dashboard', function () {
   return view('dashboard');


})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
   Route::resource('tareas', TareaController::class);
   Route::resource('categorias', CategoriaController::class);
   Route::put('/tareas/{tarea}/toggle', [TareaController::class, 'toggle'])->name('tareas.toggle');

});

# Ruta a la vista del formulario para crear Categorias.
Route::post('/crear-categoria', [CategoriaController::class, 'create'])->name('categorias.crear');

# Ruta para crear la categoria y nos manda a la lista de Categorias.
Route::post('/guardar-categoria', [CategoriaController::class, 'store'])->name('categorias.store');

# Ruta que modifica una categoria existente.
Route::put('/modificar-categoria/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');

# Ruta a la vista donde realiza la modificación.
Route::get('/editar-categoria/{categoria}',[CategoriaController::class, 'edit'])->name('categorias.edit');

# Ruta que elimina una Categoria existente.
Route::delete('/eliminar-categoria/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.delete');

require __DIR__.'/auth.php';

