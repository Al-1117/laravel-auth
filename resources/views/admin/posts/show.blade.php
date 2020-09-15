
{{--Estendo il layout già presente --}}

@extends('layouts.app')

@section('content')
  <ul>
    <li>
      <h2>Dettaglio del post: <em>{{$post->title}}</em></h2>
      <p><strong>Contenuto:</strong> {{$post->content}}</p>

      <h4>Dettagli autore:</h4>

      <p><strong>Autore:</strong> {{$post->user->name}}</p>
      <p><strong>Email:</strong> </em>{{$post->user->email}}</em></p>
    </li>

  </ul>
@endsection
