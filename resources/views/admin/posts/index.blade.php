{{-- Estendo il layout già presente --}}

@extends('layouts.app')

@section('content')
  <h2>Elenco dei posts:</h2>
  <ul>
    @foreach ($posts as $post)
      <li>{{$post->title}} di: <strong>{{$post->user->name}}</strong></li>
    @endforeach

  </ul>
@endsection
