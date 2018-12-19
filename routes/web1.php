<?php


//Esta ruta devuelve un vista "views/home.blade.php"

Route::get('/', function(){
        
        return view('home');
});


// esta ruta devulve una vista, pero esta recibe un paramtro, y dicho
// parametro sera emviado a la vista a traves de la funcion "view"

Route::get('/{nombre?}', function($nombre='Invitado'){
        
        return view('home',compact('nombre'));

})->name('home');
