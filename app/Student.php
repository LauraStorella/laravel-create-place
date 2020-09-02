<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Reminder: se nome Model e nome Tabella DB non coincidono
    //   --> creo attributo protected
    // protected $table = 'my_students';


    // Definisco colonne da gestire che ho creato
    //   --> DB gestisce automaticamente ID e created_at/updated
    protected $fillable = [
        'nome',
        'cognome',
        'descrizione', 
        'voto',
        'nome_classe'
    ];




}
