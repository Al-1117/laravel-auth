
{{-- Estendo il layout già presente --}}

@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h1>Aggiungi nuovo post</h1>

        {{-- Validazione form --}}
        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form class="" action="{{route('posts.update', $post)}}" method="post" enctype="multipart/form-data">
          @csrf
          @method('PUT')
          {{-- Title --}}
          <label>Title</label>
          <input type="text" name="title" value="{{ old('title') ? old('title') : $post->title  }}">
          <br>


          {{-- Content --}}
          <label>Content</label>
          <textarea name="content" rows="8" cols="80">{{ old('content') ? old('content') : $post->content  }}</textarea>
          <br>
          <br>

          {{-- Image --}}
          <label>Post Image</label>
          <input type="file" name="image" accept="image/*" value="{{$post->image}}">
          <br>
          <br>

          <div>
            <input type="submit" value="Conferma modifiche">

          </div>



        </form>




      </div>
    </div>
  </div>
@endsection
