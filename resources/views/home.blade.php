@extends('layouts.app')
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
    {{-- Font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    {{-- 12Bool --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/12bool_def.css') }}"> --}}
    {{-- My Style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Title --}}
    <title>@yield('title')</title>
  </head>

  {{-- Includo l'Header --}}

  @include('layouts/partials/header')
  @include('layouts/partials/main')
  {{-- @include('layouts/partials/footer') --}}


  {{-- @section('content')
    <body>
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header">{{ __('Dashboard') }}</div>

                      <div class="card-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif

                          {{ __('You are logged in!') }}
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </body>

  @endsection --}}

</html>
