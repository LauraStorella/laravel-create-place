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
    return view('welcome');
});


// Creo nuova route 'students'
//   --> la View conterrà una lista di studenti
Route::get('/students', function () {

    // Creo array di array contenente l'elenco degli studenti
    $arr_students = [

        [
            'nome' => 'Sara',
            'cognome' => 'Bianchi',
            'voto' => 8,
        ],

        [
            'nome' => 'Mario',
            'cognome' => 'Rossi',
            'voto' => 7,
        ],

        [
            'nome' => 'Lisa',
            'cognome' => 'Verdi',
            'voto' => 6,
        ],
    ];

    // Return
    //   --> 1° param : nome route/view
    //   --> 2° param : array di informazioni
    //   --> le Keys create diventano variabili in blade
    return view('students', [
        'teacher' => 'Alessandro',
        'students' => $arr_students,
    ]);
});