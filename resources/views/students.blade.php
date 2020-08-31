@extends('layouts.layout')

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
@endsection