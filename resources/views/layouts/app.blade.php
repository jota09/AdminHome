<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!-- Styles -->
  {{ HTML::style('css/lib/jquery-ui.min.css') }}
  {{ HTML::style('css/lib/materialize.min.css') }}
  {{ HTML::style('css/adminhome/style.css') }}

</head>
<body>
  <header>
    <ul id="listaLogueado" class="dropdown-content">
      <li><a href="{{ url('/home') }}">Pagina principal</a></li>
      <li class="divider"></li>
      <li><a href="{{ url('/usuarios') }}">Visualizar usuarios</a></li>
      <li class="divider"></li>
      <li><a href="{{ url('/logout') }}">Cerrar Sesión</a></li>
    </ul>
    <nav>
      <div class="nav-wrapper">
        <div class="col s4 m2">
        <a href="{{ url('/home') }}"  class="brand-logo right" style="height: 100%;"><img class="circle responsive-img" src="https://cdn1.iconfinder.com/data/icons/simple-icons/128/laravel-128-black.png" style="width: 63px;"></a>
        </div>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          @if (Route::has('login'))
            <div class="top-right links">
            @auth
              <li style="width: 200px;"><a class="dropdown-button" href="#!" data-activates="listaLogueado" style="text-align: center;">Home<i class="material-icons right">arrow_drop_down</i></a></li>
            @else
              <li><a href="{{ url('/') }}">Welcome</a></li>
              @if (\Request::is('register'))
                <li><a href="{{ route('login') }}">Login</a></li>
              @else
                <li><a href="{{ route('register') }}">Register</a></li>
              @endif
            @endauth
            </div>
          @endif
        </ul>
      </div>
    </nav>
  </header>
  <main>
  <div class="section no-pad-bot" id="index-banner">
    @yield('content')
  </div>
  </main>
  <div class="fixed-action-btn horizontal">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a href="{{ url('/logout') }}" class="btn-floating red"><i class="material-icons">keyboard_return</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
      <li><a href="{{ url('/usuarios') }}" class="btn-floating green"><i class="material-icons">account_circle</i></a></li>
      <li><a href="{{ url('/home') }}" class="btn-floating yellow darken-1"><i class="material-icons">home</i></a></li>
    </ul>
  </div>
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by Jota
      </div>
    </div>
  </footer>


    <!-- Libraries -->
    {{ HTML::script('js/lib/jquery-3.2.1.min.js') }}
    {{ HTML::script('js/lib/jquery-ui.min.js') }}
    {{ HTML::script('js/lib/materialize.min.js') }}
    <!--  Scripts-->
    {{ HTML::script('js/adminhome/init.js') }}
    <script src="https://use.fontawesome.com/3461617f50.js"></script>
    @yield('js')
  </body>
</html>
