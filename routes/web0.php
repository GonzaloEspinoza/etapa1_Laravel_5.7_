<?php




//-----------------------------pruebas con las rutas--------------------------
// las rutas son las direciones URLs 
Route::get('/home1', function(){
        return "Welcome to Home1";
});


Route::get('datos1', function(){
        return "Welcome to Datos1";
});

Route::get('/', function () {
    return view('welcome');
});


//Esta routa recibe un nombre como paraetro ---> si no es enviado el parametro nombre, aparece un erro 404
Route::get('saludos1/{nombre}', function($nombre){
        return "Welcome ".$nombre;
});

  //esta ruta recibe un bombre como parametro, pede ser enviado o no
Route::get('saludos2/{nombre2?}', function($nombre2 = "Invitado"){
    return "welcome ".$nombre2;
});

//----------------------------------------------------------------------------------




//-------------URLS  ROUTES-------------------------
Route::get('contactos', function(){
        return "Seccion de contactos";

});

Route::get('materias', function(){
        return "clacificacion de las materias";
});

Route::get('/', function(){
        echo "<a href = '/contactos'> contactos 1 </a><br>";
        echo "<a href = '/contactos'> contactos 2 </a><br>";
        echo "<a href = '/materias'> materias 3 </a><br>";
        echo "<a href = '/contactos'> contactos 4 </a><br>";
        echo "<a href = '/contactos'> contactos 5 </a><br>";
});

//---------------------------------------------------



//--------------darle nombre a las rutas--------------
Route::get('direcciones', function(){
        return "lista de direciones";
})->name('direccion');



Route::get('/', function(){
        echo "<a href = '". Route('direccion') ."'>direccion 1</a><br>";
        echo "<a href = '". Route('direccion') ."'>direcion 2</a><br>";
});

//------------------------------------------------------