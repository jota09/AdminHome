<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <title>.:: Admin Home ::.</title>

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
  <li><a href="{{ url('/home') }}">Visualizar usuarios</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/logout') }}">Cerrar Sesión</a></li>
</ul>
  <nav>
    <div class="nav-wrapper">
      <div class="col s4 m2">
      <a href="#" class="brand-logo right" style="height: 100%;"><img class="circle responsive-img" src="https://cdn1.iconfinder.com/data/icons/simple-icons/128/laravel-128-black.png" style="width: 63px;"></a>
      </div>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        @if (Route::has('login'))
          <div class="top-right links">
          @auth
            <li style="width: 200px;"><a class="dropdown-button" href="#!" data-activates="listaLogueado" style="text-align: center;">Home<i class="material-icons right">arrow_drop_down</i></a></li>
          @else
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
          @endauth
          </div>
        @endif
      </ul>
    </div>
  </nav>
</header>
  <main>

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
       <p class="flow-text"><h1 class="center-align">Welcome AdminHome</h1></p>
    </div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="fa fa-bar-chart" aria-hidden="true"></i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="fa fa-cogs" aria-hidden="true"></i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>
</main>
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



@section('js')
  <!-- Libraries -->
  {{ HTML::script('js/lib/jquery-3.2.1.min.js') }}
  {{ HTML::script('js/lib/jquery-ui.min.js') }}
  {{ HTML::script('js/lib/materialize.min.js') }}
  <!--  Scripts-->
  {{ HTML::script('js/adminhome/init.js') }}
  <script src="https://use.fontawesome.com/3461617f50.js"></script>
@stop

@yield('js')
  </body>
</html>
