
{{-- Estendo il layout già presente --}}

@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p>{{'Effettua l\'accesso per visualizzare gli autori'}}</p>
        <ul>
          <li>
            <h2>Dettaglio del post: <em>{{$post->title}}</em></h2>
            <p>Contenuto: {{$post->content}}</p>
            <img src="{{asset('storage') . '/' . $post->image}}" alt="{{$post->title . 'image'}}">
          </li>
        </ul>
        <div class="">
          <a href="{{route('posts.index')}}">Torna all'elenco dei post</a>

        </div>
      </div>
    </div>
  </div>
@endsection
