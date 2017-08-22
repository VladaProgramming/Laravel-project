@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center">
    <h1>Welcom to laravel</h1>
    <p>This is the laravel aplication 5.4</p>
    @if(Auth::guest())

      <p><a class="btn btn-primary btn-lg" href={{'/login'}} role="button">Login</a> <a href={{'/register'}} class="btn btn-success btn-lg" role="button">Register</a></p>
    @else
      <a class="btn btn-primary btn-lg" href="{{ route('logout') }}"
          onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
        Logout
      </a>
    @endif
  </div>

@endsection
