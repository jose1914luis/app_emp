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

/*Route::get('/', function () {
    return view('welcome');
});*/

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
Route::get('empresa', 'Empresa@index');

