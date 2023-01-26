<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



//Route::view('URL', 'NOMBRE VIEW')->name("NOMBRE COMO QUERAMOS LLAMARLO");

Route::view('/inicio', 'welcome')->name("home");

Route::view('/posts_listado', 'listado')->name('listado');


//Si queremos pasar una id(o cualquier otro parametro), deberiamos hacerlo así:

Route::view('/posts_ficha/{id}', 'listadoId', ['id' => 'id'])->name('listadoId');



// Mediante "resource", podemos agrupar diferentes url con sus metodos.
// Estos metodos serán los que pasen la vista.
// En este caso loa grupamos en "posts", y a continuacion añadimos el controlador seguido de ::class
// Por ultimo, indicamos que solo lea los metodos asignados
Route::resource('posts', PostController::class)->only(['index', 'show', 'create', 'edit']);
