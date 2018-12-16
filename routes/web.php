<?php


Route::get('/home1', function(){
        return "Welcome to Home1";
});


Route::get('datos1', function(){
        return "Welcome to Datos1";
});

Route::get('/', function () {
    return view('welcome');
});
