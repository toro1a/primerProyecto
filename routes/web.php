<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\miControlador;
use App\Models\Articulo;
use App\Models\Cliente;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/calificaciones", function(){

    $cliente = Cliente::find(1);

    foreach($cliente->calificaciones as $calificacion){

        echo $calificacion->calificacion . "</br>";
    }

})->name('calificaciones');

Route::get("cliente/{id}/perfil", function($id){

    $cliente = Cliente::find($id);

    foreach($cliente->perfils as $perfil){

        echo $perfil->nombre . "</br>";
    }

})->name('cliente_perfil');


Route::get("/articulo/{id}/cliente", function($id){

    return Articulo::find($id)->cliente->nombre;

})->name('articulo_cliente');

Route::get("/cliente/{id}/articulo", function($id){

    return Cliente::find($id)->articulo;

})->name('cliente_articulo');

Route::get("/cliente/{id}/articulos", function($id){

    $articulos = Cliente::find($id)->articulos->where('pais_origen','Alemania');

    foreach($articulos as $articulo){

        echo $articulo->nombre_articulo . "</br>";
    }

})->name('cliente_articulos');

/* Route::get("/hardDelete", function(){

$articulo = Articulo::withTrashed()->where('id',8)->forceDelete();

})->name('hardDelete');

Route::get("/buscarSoloBorrados", function(){

    $articulo = Articulo::onlyTrashed()->get();

    return $articulo;

})->name('buscarSoloBorrados');

Route::get("/buscarConBorrados", function(){

    $articulo = Articulo::withTrashed()->where('id',8)->restore();

    //return $articulo;

})->name('buscarConBorrados');

Route::get("/softDelete", function(){

    $articulo = Articulo::find(8);
    $articulo->delete();

})->name('softDelete');

Route::get("/insercionVarios", function(){

    Articulo::create(['nombre_articulo'=>'impresora','precio'=>20,'pais_origen'=>'Colombia','observaciones'=>'Nada','seccion'=>'informática']);


})->name('insercionVarios');

Route::get("/borrar", function(){

    /*$articulo = Articulo::find(2);
    $articulo->delete();

    Articulo::where('nombre_articulo', 'Navaja')->delete();


})->name('borrar');

Route::get("/actualizar", function(){

    $articulo = Articulo::find(7);
    $articulo->precio=60.5;
    $articulo->save();

    Articulo::where('seccion','Menaje')->where('pais_origen','Italia')->update(["precio"=>90]);


})->name('actualizar');

Route::get("/insertar", function(){

    $articulo =  new Articulo;

    $articulo->nombre_articulo="Pantalones";
    $articulo->precio=23.5;
    $articulo->pais_origen="Italia";
    $articulo->observaciones="Limpios";
    $articulo->seccion="Ropa";
    $articulo->save();


})->name('insertar');

Route::get("/leer", function(){

    /*$articulos = Articulo::all();

    foreach($articulos as $articulo){

        echo "Nombre: " . $articulo->nombre_articulo . " Precio: " . $articulo->precio .  "</br>";

    }

    $articulos = Articulo::where('seccion', 'Cerámica')->orderBy('nombre_articulo','desc')->take(10)->get();

    return $articulos;

})->name('leer');

Route::get('/', function () {
    return view('welcome');
});

Route::get("/",[miControlador::class,'index'])->name('index');
Route::get("/crear",[miControlador::class,'create'])->name('crear');
Route::get("/mostrar",[miControlador::class,'show'])->name('mostrar');
Route::get("/articulos",[miControlador::class,'store'])->name('articulos');
Route::get("/contacto",[miControlador::class,'contactar'])->name('contacto');
Route::get("/galeria",[miControlador::class,'galeria'])->name('galeria');

Route::get("/insertar",function(){

    DB::insert("INSERT INTO articulos (nombre_articulo,precio,pais_origen,seccion,observaciones) 
    VALUES (?,?,?,?,?)", ["Balón", 42.4, "USA", "Deporte", "Caro"]);
})->name('insertar');

Route::get("/leer",function(){

    $resultados = DB::select("SELECT * FROM articulos WHERE ID = ?", [1]);

    foreach($resultados as $articulo){

        return $articulo->nombre_articulo;

    }

})->name('leer');

Route::get("/actualizar",function(){

    DB::update("UPDATE articulos SET seccion = 'Decoración' WHERE ID = ?", [2]);

})->name('actualizar');

Route::get("/borrar",function(){

    DB::delete("DELETE FROM articulos WHERE id=?", [1]);

})->name('borrar');

*/


