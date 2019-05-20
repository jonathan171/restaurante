<?php
use App\Http\Requests;
use Illuminate\Http\Request;
use App\TipoComida;
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
	 $Listacomidas=TipoComida::all();
    return view('welcome',compact('Listacomidas'));

});
Route::get('search_comida','ControllerTipoComida@find_public_by_search')->name('search_comida');

Route::get('/comida/findComic', 'ControllerTipoComida@findComic');
Route::get('Ver_restaurante/{id}', 'descripcionComida@find_public_by_restaurant')->name('Ver_restaurante');