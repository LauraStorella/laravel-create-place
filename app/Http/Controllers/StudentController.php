<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {

        $students = [

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

        return view('students', [
            'teacher' => 'Alessandro',
            'students' => $students,
        ]);
    }
}