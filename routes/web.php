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

Route::get('/', function () {

   $fumetti = config('fumettiComics');

    // dd($fumetti);

    return view('pages.welcome', compact('fumetti'));
})->name('home');

// ---------------------------------------------------------- //

//Rotta per la pagina del singolo fumetto
Route::get('/fumetti/{id}', function($id)
{
    //Estrazione API dei fumetti (cartella "config")
    $fumetti = config('fumettiComics');

    //Controllo:
        //se il valore ID sia numerico, E
        //se il valore ID sia positivo, E
        //se il valore ID sia inferiore al numero di elementi nel vettore API dei fumetti
    if(in_numeric($id) && $id>=0 && $id<=count($fumetti))
    {
        $fumetto_singolo = $fumetti[$id];
    }
    //Altrimenti: Page not found
    else
    {
        abort(404);
    }
    
    return view('pages.comics.show', compact('fumetto_singolo'));
});




