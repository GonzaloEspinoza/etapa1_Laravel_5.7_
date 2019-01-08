<?php

use App\Http\Controllers\CiudadCotroller;



//rutas que devuelves vistas con poca o ningina informacion, se debe utilizar el siquiente codigo
//ejemplo :  politas y condiciones de pruvacidad, paginas informatica, mision vision etc .. o cualquie pagina que no requiere mucha logica


$tipoCompras = [
    ['title' => 'mixtos  #1'],
    ['title' => 'frutas  #2'],
    ['title' => 'electronicos #3'],
    ['title' => 'productos de limpieza #4'],
    ['title' => 'material de construcion #5'],
];



Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact','contact')->name('contact');
Route::view('/compras', 'compras' , compact('tipoCompras'))->name('compras');

route::get('/portafolio','PortafolioController@index')->name('portafolio');
route::get('/ciudad', 'CiudadCotroller@index')->name('ciudad');

