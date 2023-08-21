@extends('layouts.app')



@section('title', 'Lista')




@section('content')

<!-- Tudo o que está aqi dentro vai ser renderizado no nosso template -->

<h1>Lista de consultas</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Data</th>
      <th scope="col">Nome do Utente</th>
      <th scope="col">diagnostico</th>
    </tr>
  </thead>
  <tbody>
    @foreach($consultas as $consulta)
    <tr>
      <th>{{$consulta->id_consulta}}</th>
      <th>{{$consulta->data}}</th>
      <td>{{$consulta->nome_utente}}</td>
      <td>{{$consulta->diagnostico}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>


@endsection