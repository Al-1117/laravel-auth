{{-- Estendo il layout già presente --}}

@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Elenco dei posts:</h2>
        <p>{{'Effettua l\'accesso per visualizzare gli autori'}}</p>
        <ul>
          @foreach ($posts as $post)
            <li> Titolo: <strong>{{$post->title}}</strong>
              <a class="btn btn-outline-info btn-sm" href="{{route('guest.posts.show', $post)}}"> Vedi dettagli</a>
            </li>
          @endforeach
        </ul>
      </div>

    </div>

  </div>

@endsection
