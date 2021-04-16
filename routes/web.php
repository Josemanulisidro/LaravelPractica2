<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('datos', function () {
    return view('datos');
});


Route::get('/datos','datosController@mostrar');
Route::post('/datos','datosController@store')->name('datos.store');

Route::get('/contacto','ContactoController@mostrar');
Route::post('/contacto','ContactoController@store')->name('contacto.store');

Route::get('/estudiantes','ControllerEstudiantes@mostrar');
Route::post('/estudiantes','ControllerEstudiantes@store')->name('estudiantes.store');

Route::resource('/Lista',ListaController::class);

Route::delete('Lista/{matricula}', 'ListaController@destroy')
->name('Lista.destroy');

Route::get('Lista/{estudiante}/edit', 'ListaController@edit')->name('Lista.edit');

Route::patch('Lista/{estudiante}/edit', 'ListaController@update')->name('Lista.update');

Route::get('pdf', 'PDFController@PDF')->name('descargaPDF');



Route::get('grafica',function (){
    return view('grafica',compact('chart'));
});

    Route::get('graficaa',function (){
        return view('graficaa',compact('chart'));
});


