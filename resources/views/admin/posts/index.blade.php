{{-- Estendo il layout già presente --}}

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12 my_index">

        <h3>Utente attualmente loggato: <em>{{$user->name}}</em></h3>

        <a class="btn btn-outline-info btn-sm" href="{{route('posts.create')}}"> Crea nuovo post</a>

        <h2>Elenco dei posts:</h2>
        <ul>
          @foreach ($posts as $post)
            <li class="post">
              <span class="post_title"><em>{{$post->title}}</em>
              </span> di: <strong>{{$post->user->name}}</strong>

              <div class="int_buttons">

                {{-- Visualizzazione Dettagli post --}}
                <a class="btn btn-success details" href="{{route('guest.posts.show', $post)}}"> Vedi dettagli</a>
                {{-- Modifca post --}}
                <a class="btn btn-outline-info" href="{{route('posts.edit', $post)}}">Modifica</a>
                {{-- Cancellazione post --}}
                <form class="delete" action="{{route('posts.destroy', $post)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <input class="btn btn-outline-danger" type="submit" value="Elimina">
                </form>
              </div>

              <hr>

            </li>


          @endforeach
        </ul>

      </div>
    </div>
  </div>
@endsection
