{{-- 1° versione esercizio --}}
{{-- @extends('layouts.layout')

@section('main_content')
  <h1>Elenco Studenti</h1>

  <h3>Insegnante: {{ $teacher }}</h3>

  @foreach ($students as $student)
    <ul>
      <li>Nome: {{ $student['nome'] }}</li>
      <li>Cognome: {{ $student['cognome'] }}</li>
      <li>Voto: {{ $student['voto'] }}</li>
    </ul>
  @endforeach
@endsection --}}


<h1>Elenco Studenti</h1>

@foreach ($my_students as $my_student)
  <div>
    <h3>Nome Studente: {{ $my_student->nome }} {{ $my_student->cognome }}</h3>

    <ul>
      <li>Descrizione: {{ $my_student->descrizione }}</li>
      <li>Voto: {{ $my_student->voto }}</li>
      <li>Classe: {{ $my_student->nome_classe }}</li>
    </ul>
  
  </div>
    
@endforeach