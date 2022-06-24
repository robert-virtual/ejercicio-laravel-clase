<?php

use App\Models\Catalog;
use Illuminate\Http\Request;
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

Route::get('/', function () {
  return view('welcome');
});


Route::get('/catalog', function () {
  // $pelis = [
  //   array(
  //     "nombre" => "Interstellar",
  //     "director" => "Christopher Nolan"
  //   ),
  //   array(
  //     "nombre" => "Shutter Island",
  //     "director" => "Martin Scorsese"
  //   ),
  //   array(
  //     "nombre" => "Catch me if you can",
  //     "director" => "Steven Spielberg"
  //   ),
  //   array(
  //     "nombre" => "Meet Joe Black",
  //     "director" => "Martin Brest"
  //   ),
  //   array(
  //     "nombre" => "Django Unchained",
  //     "director" => "Quentin Tarantino"
  //   ),
  // ];
  $pelis = Catalog::all();
  return view('catalog.catalog', ["peliculas" => $pelis]);
});
Route::get('/catalog/show/{id}', function ($id) {
  $peli = Catalog::find($id);
  return view('catalog.show', $peli);
});
Route::view('/catalog/create', 'catalog.create');
Route::post('/catalog/store', function (Request $request) {
  $peli = new Catalog;
  $peli->nombre = $request->nombre;
  $peli->director = $request->director;
  $peli->fechaPublicacion = $request->fecha;
  $peli->description = $request->descripcion;
  $peli->save();
  return redirect('/catalog');
});
