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

    return view('layouts.app', compact('fumetti'));
})->name('home');

// ---------------------------------------------------------- //

//Rotta per la pagina del singolo fumetto
Route::get('/{id}', function($id)
{
    //Estrazione API dei fumetti (cartella "config")
    $fumetti = config('fumettiComics');

    //Controllo:
        //se il valore ID sia numerico, E
        //se il valore ID sia positivo, E
        //se il valore ID sia inferiore al numero di elementi nel vettore API dei fumetti
    if(is_numeric($id) && $id>=0 && $id<count($fumetti))
    {
        //Estraggo il singolo fumetto e lo salvo in $fumetto_singolo
        $fumetto_singolo = $fumetti[$id];
    }
    //Altrimenti: 
    else
    {
        //Page not found (404)
        abort(404);
    }

    // dd($fumetto_singolo);
    
    return view('pages.comics.show', compact('fumetto_singolo'));
})->name('show.fumetti');




