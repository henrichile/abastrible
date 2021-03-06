<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('abastible.css') }}">

    <title>Home - Dúo - Abastible</title>
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


    <header>
      <div class="col-md-12 cabecera-duo">
        <div class="container">
          <img src="{{ asset('img/logo-abastible.png') }}" alt="abastible"> 
        </div>
      </div>
      <div class="col-md-12 barra-duo">
        <div class="container">
            <ul class="nav navbar-nav">
                @guest
                
        @else
        <li class="propClone float-left btn-medium sm-no-margin-tb dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                Hola {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" style="padding-left: 40px;" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
        @endguest 
            </ul>
            
        </div>
      </div>
    </header>
    @yield('content')
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xs-12">
          <img src="{{ asset('img/logo-abastible.png') }}" alt="abastible"> 
        </div>
        <div class="col-md-6 col-xs-12">
          <a class="wtsp-footer-duo" href="#">Asistente Virtual FN +56 944779661 <i clas="fa fa-whatsapp"></i></a>
        </div>
      </div>
    </div>
  </footer>

