<?php


Auth::routes();

Route::get('/', 'HomeController@index')->name('inicio');

Route::get('salir',function(){
    Auth::logout();
    return redirect('/');
})->name('salir');

Route::get('admin/usuarios', 'AdminController@usuarios')->name('admin.usuarios');
