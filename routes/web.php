<?php

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TestController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Estableciendo CRUD


// Las peticiones GET las vamos a usar cuando querramos consultar informacion en la base de datos.
// Las peticiones POST las vamos a usar cuando querramos insertar o actualizar informacion en la base de datos.
Route::get('/admin/products', 'ProductController@index'); // LISTADO. Esta ruta va a mostrar el listado de productos. Y editar un producto determinado o eliminarlo. Usando el metodo index
Route::get('/admin/products/create', 'ProductController@create'); // FORMULARIO. esta ruta va a permitir crear nuevos productos. Para que solo los administradores puedan hacerlo. Usando el metodo create.
Route::post('/admin/products', 'ProductController@store'); // REGISTRAR. Con este va a persistir en la base de datos.

Route::get('/admin/products/{id}/edit', 'ProductController@edit'); //Formulario de edicion
Route::post('/admin/products/{id}/edit', 'ProductController@update'); // Actualizar los datos

Route::delete('/admin/products/{id}', 'ProductController@destroy');

//CR

//UD
