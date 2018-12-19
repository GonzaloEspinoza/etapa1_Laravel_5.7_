<?php



//rutas que devuelves vistas con poca o ningina informacion, se debe utilizar el siquiente codigo
//ejemplo :  politas y condiciones de pruvacidad, paginas informatica, mision vision etc .. o cualquie pagina que no requiere mucha logica


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/portafolio', 'portafolio')->name('portafolio');
Route::view('/contact','contact')->name('contact');
Route::view('/prueba','prueba')->name('prueba');


