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
    return view('home');
})->name('pagina-home');


Route::get('/prodotti', function () {
  $pasta = config('pastaMolisana');


  $pasta_lunga= array_filter($pasta, function($elemento) {
    return $elemento['tipo']== 'lunga';
  });
  // $elemento è un valore segnaposto
  // 'tipo' è all'interno di array pasta
  $pasta_corta= array_filter($pasta, function($elemento) {
    return $elemento['tipo']== 'corta';
  });
  $pasta_cortissima= array_filter($pasta, function($elemento) {
    return $elemento['tipo']== 'cortissima';
  });

    $data = [
        'formati'=> [
        'lunga'=> $pasta_lunga,
        'corta'=> $pasta_corta,
        'cortissima'=>$pasta_cortissima
        ]
    ];
    // trasformiamo $pasta in un $data in quanto
    // dobbiamo passargli
    // un array associativo(coppia chiave-valore)
    // a return view
    return view('prodotti', $data);
})->name('pagina-prodotti');






Route::get('/dettaglio/{id}', function ($id) {
  $pasta = config('pastaMolisana');
  if ($id>=0){
    $prodotto = $pasta[$id];

    $data = [
      'formaPasta' => $prodotto
    ];
    // trasformiamo $prodotto in un $data in quanto
    // dobbiamo passargli
    // un array associativo(coppia chiave-valore)
    // a return view
      return view('dettagli', $data);
  }
  else{
    abort('404');
  }
})->name('pagina-dettagli');









Route::get('/notizie', function () {
    return view('news');
})->name('pagina-notizie');
