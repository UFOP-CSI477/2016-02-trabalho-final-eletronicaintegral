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
Auth::routes();

Route::get('/', 'OrdemController@index');

Route::resource('ordems', 'OrdemController');

Route::get('sobre', function (){
    return view('sobre');
});

Route::get('/search', 'OrdemController@search');


Route::get('/searches/{id}', function ($id) {
    $ordems = DB::table('ordems')->find($id);
    return view('ordem.show')->with('ordems', $ordems);
});

Route::post('/search','OrdemController@exibir');