<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('home');
});

/*
|--------------------------------------------------------------------------
| ADMIN PRODUCTOS
|--------------------------------------------------------------------------
*/

Route::get('/admin/productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('/admin/productos/crear', [ProductoController::class, 'crear'])->name('productos.crear');

Route::post('/admin/productos', [ProductoController::class, 'store'])->name('productos.store');

Route::get('/admin/productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');

Route::put('/admin/productos/{id}', [ProductoController::class, 'update'])->name('productos.update');

Route::delete('/admin/productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

/*
|--------------------------------------------------------------------------
| IMAGENES
|--------------------------------------------------------------------------
*/

Route::delete('/imagenes/{id}', [ProductoController::class,'destroyImagen'])->name('imagenes.destroy');

/*
|--------------------------------------------------------------------------
| CATALOGO PUBLICO
|--------------------------------------------------------------------------
*/

Route::view('/productos', 'productos');
Route::get('/catalogo/{categoria}', [ProductoController::class,'catalogo']);
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');
