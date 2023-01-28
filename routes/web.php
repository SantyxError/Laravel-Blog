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


Route::get('/posts/nuevaPrueba',  [PostController::class, 'nuevaPrueba']);
Route::get('/posts/editarPrueba/{id}', [PostController::class, 'editarPrueba']);

Route::resource('posts', PostController::class);

//Route::get('/posts/nuevaPrueba', 'PostController@nuevaPrueba')->name('nuevaPrueba');
//Route::get('posts/editarPrueba/{id}', 'PostController@editarPrueba')->name('editarPrueba');

// Route::get('posts', 'PostController');
