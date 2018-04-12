<?php

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

Route::get('/', function () {
    return view('home');
});

/*Route::get('/insert', function() {
    App\Empresa::create(array('razon_social' => 'SIGMIN 2'));
    return 'category added';
});

Route::get('/read', function() {
    $empresa = new App\Empresa();
    
    $data = $empresa->all(array('razon_social','id'));

    foreach ($data as $list) {
        echo $list->id . ' ' . $list->razon_social . ' ';
    }
});

Route::get('/hello',function(){
    return 'Hello World!';
});

Route::get('empresa', function () {
    return view('empresa',array('name' => 'The Raven'));
});



*/
Route::get('empresa/{id}', 'Empresa_controller@show');
//Route::post('crear_empresa', 'Empresa_controller@store')->name('empresa.store');
Route::post('crear_empresa', 'Empresa_controller@store');

Route::post('crear_evaluacion', 'Evaluacion_controller@store');

Route::get('empresa_evaluar', 'Evaluacion_controller@continuar_evaluacion');


Route::get('empresa_new', function () {
    return view('empresa_new');
});

Route::get('buscar_empresa', function () {
    return view('filtro_empresa');
});

Route::get('empresa_list', 'Empresa_controller@list');

/*Route::get('empresa_evaluar', function () {
    return view('empresa_evaluar');buscar_empresa
});*/

Route::get('/api/v1/buscar_empresa', 'Empresa_controller@get_empresa');
Route::get('/api/v1/buscar_ubicacion', 'Ciudad_controller@get_ciudad');
