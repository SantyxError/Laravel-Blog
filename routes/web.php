<?php

use Illuminate\Support\Facades\Route;



// Route::view('URL', 'NOMBRE VIEW')->name("NOMBRE COMO QUERAMOS LLAMARLO");

Route::view('/inicio', 'welcome')->name("home");

Route::view('/posts_listado', 'listado')->name('listado');


//Si queremos pasar una id(o cualquier otro parametro), deberiamos hacerlo así:

Route::view('/posts_ficha/{id}', 'listadoId', ['id' => 'id'])->name('listadoId');
