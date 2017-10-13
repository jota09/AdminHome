<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

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
  <li><a href="{{ url('/') }}">{{Lang::get("welcome.start")}}</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/home') }}">{{Lang::get("welcome.home")}}</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/usuarios') }}">{{Lang::get("welcome.view_user")}}</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/config') }}">{{Lang::get("welcome.config")}}</a></li>
  <li class="divider"></li>
  <li><a href="{{ url('/logout') }}">{{Lang::get("welcome.logout")}}</a></li>
</ul>
  <nav>
    <div class="nav-wrapper">
      <div class="col s4 m2">
        <a href="{{ url('/') }}" class="brand-logo right" style="height: 100%;"><img class="responsive-img" src="images/logo.png" style="width: 91px;"></a>
      </div>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        @if (Route::has('login'))
          <div class="top-right links">
          @auth
            <li style="width: 200px;"><a class="dropdown-button" href="#!" data-activates="listaLogueado" style="text-align: center;">{{Lang::get("welcome.menu")}}<i class="material-icons right">arrow_drop_down</i></a></li>
          @else
            <li><a href="{{ route('login') }}">{{Lang::get("welcome.login")}}</a></li>
            <li><a href="{{ route('register') }}">{{Lang::get("welcome.register")}}</a></li>
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
       <p class="flow-text"><h1 class="center-align">{{Lang::get("welcome.welcome")}} {{Lang::get("welcome.namecomp")}}</h1></p>
    </div>
  </div>

  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="fa fa-bar-chart" aria-hidden="true"></i></h2>
            <h5 class="center">{{Lang::get("welcome.panel1")}}</h5>

            <p class="light">{{Lang::get("welcome.panel1_descr")}}.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="fa fa-user-circle-o" aria-hidden="true"></i></h2>
            <h5 class="center">{{Lang::get("welcome.panel2")}}</h5>

            <p class="light">{{Lang::get("welcome.panel2_descr")}}.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="fa fa-cogs" aria-hidden="true"></i></h2>
            <h5 class="center">{{Lang::get("welcome.panel3")}}</h5>

            <p class="light">{{Lang::get("welcome.panel3_descr")}}.</p>
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
          <h5 class="white-text">{{Lang::get("welcome.namecomp")}}</h5>
          <p class="grey-text text-lighten-4">{{Lang::get("welcome.descrpcomp")}}</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">{{Lang::get("welcome.language")}}</h5>
          <ul>
            @foreach (Config::get('languages') as $lang => $language)
                <li>
                  <a class="white-text" href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                </li>
            @endforeach
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">{{Lang::get("welcome.connect")}}</h5>
          <ul>
            <li><div class="col s12" style="padding-left: 0px;"><div class="col s3"><a class="white-text" href="#!"><i class="fa fa-facebook-square" aria-hidden="true" style="font-size: 30px;"></i></a></div><div class="col s3" style="padding-left: 0px;"><a class="white-text" href="#!"><i class="fa fa-twitter-square" aria-hidden="true" style="font-size: 30px;"></i></a></div></div></li>
            <li><div class="col s12" style="padding-left: 0px;"><div class="col s3"><a class="white-text" href="#!"><i class="fa fa-instagram" aria-hidden="true" style="font-size: 30px;"></i></a></div><div class="col s3" style="padding-left: 0px;"><a class="white-text" href="#!"><i class="fa fa-whatsapp" aria-hidden="true" style="font-size: 30px;"></i></a></div></div></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        {{Lang::get("welcome.madeby")}} {{Lang::get("welcome.autor")}}
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
