{{-- Estendo il layout già presente --}}

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h3>Utente attualmente loggato: <em>{{$user->name}}</em></h3>

        <a class="btn btn-outline-info btn-sm" href="{{route('posts.create')}}"> Crea nuovo post</a>

        <h2>Elenco dei posts:</h2>
        <ul>
          @foreach ($posts as $post)
            <li>{{$post->title}} di: <strong>{{$post->user->name}}</strong>

              {{-- Visualizzazione Dettagli post --}}
              <a class="btn btn-outline-info btn-sm" href="{{route('guest.posts.show', $post)}}"> Vedi dettagli</a>

              {{-- Modifca post --}}
              <a href="{{route('posts.edit', $post)}}">Modifica</a>

              {{-- Cancellazione post --}}
              <form class="delete" action="{{route('posts.destroy', $post)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Elimina">
              </form>

            </li>


          @endforeach
        </ul>

      </div>
    </div>
  </div>
@endsection
