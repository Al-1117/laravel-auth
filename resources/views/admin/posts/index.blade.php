{{-- Estendo il layout già presente --}}

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h3>Utente attualmente loggato: <em>{{$user->name}}</em></h3>
        <h2>Elenco dei posts:</h2>
        <ul>
          @foreach ($posts as $post)
            <li>{{$post->title}} di: <strong>{{$post->user->name}}</strong>
              <a class="btn btn-outline-info btn-sm" href="{{route('guest.posts.show', $post)}}"> Vedi dettagli</a>
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
