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
    $data =  [
        'name' => 'Laravel',
        'frameworks' =>
        [
            'Code Igniter',
            'Symfony',
            'Yii Framework',
            'Zend',
            'FuelPhP'
        ]
    ];
    return view('home', $data);
})->name('Home');

Route::get('/M', function () {
    $data = [
        'title' => 'M as model',
        'text' => 'il model fornisce i metodi per accedere ai dati utili all\'applicazione.'
    ];
    return view('modello', $data);
})->name('model');

Route::get('/V', function () {
    $data = [
        'title' => 'V as view',
        'text' => 'il view visualizza i dati contenuti nel model e si occupa dell\'interazione con utenti e agenti.'
    ];
    return view('vista',$data);
})->name('view');

Route::get('/C', function () {
    $data = [
        'title' => 'C as controller',
        'text' => 'il controller riceve i comandi dell\'utente (in genere attraverso il view) e li attua modificando lo stato degli altri due componenti.'
    ];
    return view('controllo', $data);
})->name('controller');