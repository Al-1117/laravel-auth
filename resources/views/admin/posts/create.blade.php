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

        <form class="" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">

          @csrf
          @method('POST')
          {{-- Title --}}
          <label>Title</label>
          <input type="text" name="title" value="{{ old('title') }}">
          <br>


          {{-- Content --}}
          <label>Content</label>
          <textarea name="content" rows="8" cols="80">{{ old('title') }}</textarea>
          <br>
          <br>

          {{-- Image --}}
          <label>Post Image</label>
          <input type="file" name="image" accept="image/*">
          <br>
          <br>

          <div>
            <input type="submit" value="Salva nuovo post">

          </div>



        </form>




      </div>
    </div>
  </div>
@endsection
