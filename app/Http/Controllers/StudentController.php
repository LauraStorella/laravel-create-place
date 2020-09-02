<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// creo collegamento Model - Controller
//   --> Controller prende dati db da Model
//   --> includo namespace base App (cartella in cui si trova Model)
//   --> includo nome Classe 
use App\Student;

class StudentController extends Controller
{
    public function index() {

        // dd('Test Metodo');


        // 2° versione esercizio - Creazione DB 
        $my_students = Student::all();
        // dd($my_students);

        return view('students', compact('my_students'));



        // 1° versione esercizio
        // $students = [

        //     [
        //         'nome' => 'Sara',
        //         'cognome' => 'Bianchi',
        //         'voto' => 8,
        //     ],

        //     [
        //         'nome' => 'Mario',
        //         'cognome' => 'Rossi',
        //         'voto' => 7,
        //     ],

        //     [
        //         'nome' => 'Lisa',
        //         'cognome' => 'Verdi',
        //         'voto' => 6,
        //     ],
        // ];

        // return view('students', [
        //     'teacher' => 'Alessandro',
        //     'students' => $students,
        // ]);
    }
}