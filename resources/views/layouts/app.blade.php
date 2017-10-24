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
  {{ HTML::style('css/lib/export.css') }}
  {{ HTML::style('css/adminhome/style.css') }}


</head>
<body>
  <header>

    <nav>
      <div class="nav-wrapper">
        <div class="col s4 m2">
        <a href="{{ url('/home') }}" class="brand-logo right" style="height: 100%;"><img class="responsive-img" src="images/logo.png" style="width: 91px;"></a>
        </div>
        <ul id="nav-mobile" class="left hide-on-med-and-down">
          @if (Route::has('login'))
            <div class="top-right links">
            @auth
              <ul id="listaLogueado" class="dropdown-content">
                <li><a href="{{ url('/') }}">{{Lang::get("app.start")}}</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/home') }}">{{Lang::get("app.home")}}</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/config') }}">{{Lang::get("app.config")}}</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/usuarios') }}">{{Lang::get("app.view_user")}}</a></li>
                <li class="divider"></li>
                <li><a href="{{ url('/logout') }}">{{Lang::get("app.logout")}}</a></li>
              </ul>
              <li style="width: 200px;"><a class="dropdown-button" href="#!" data-activates="listaLogueado" style="text-align: center;">{{Lang::get("app.menu")}}<i class="material-icons right">arrow_drop_down</i></a></li>
            @else
              <div class="top-right links">
                <ul id="listaNoLogueado" class="dropdown-content">
                  <li><a href="{{ url('/') }}">{{Lang::get("app.start")}}</a></li>
                  <li class="divider"></li>
                  <li><a href="{{ route('login') }}">{{Lang::get("welcome.login")}}</a></li>
                  <li class="divider"></li>
                  <li><a href="{{ route('register') }}">{{Lang::get("welcome.register")}}</a></li>
                </ul>
                <li style="width: 200px;"><a class="dropdown-button" href="#!" data-activates="listaNoLogueado" style="text-align: center;">{{Lang::get("app.menu")}}<i class="material-icons right">arrow_drop_down</i></a></li>
              </div>
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
      <li><a title='{{Lang::get("app.title_logout")}}' href="{{ url('/logout') }}" class="btn-floating red pulse"><i class="material-icons">keyboard_return</i></a></li>
      <li><a title='{{Lang::get("app.title_config")}}' href="{{ url('/config') }}" class="btn-floating blue pulse"><i class="fa fa-cogs" aria-hidden="true"></i></a></li>
      <li><a title='{{Lang::get("app.title_user")}}' href="{{ url('/usuarios') }}" class="btn-floating green pulse"><i class="fa fa-user-o" aria-hidden="true"></i></a></li>
      <li><a title='{{Lang::get("app.title_home")}}' href="{{ url('/home') }}" class="btn-floating yellow darken-3 pulse"><i class="fa fa-home" aria-hidden="true"></i></a></li>
    </ul>
  </div>
  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">{{Lang::get("welcome.namecomp")}}</h5>
          <p class="grey-text text-lighten-4">{{Lang::get("welcome.descrpcomp")}}.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">{{Lang::get("app.language")}}</h5>
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


    <!-- Libraries -->
    {{ HTML::script('js/lib/jquery-3.2.1.min.js') }}
    {{ HTML::script('js/lib/jquery-ui.min.js') }}
    {{ HTML::script('js/lib/jquery.validate.min.js') }}
    {{ HTML::script('js/lib/materialize.min.js') }}
    {{ HTML::script('js/lib/react.js') }}
    {{ HTML::script('js/lib/react-dom.js') }}
    {{ HTML::script('js/lib/amcharts/amcharts.js') }}
    {{ HTML::script('js/lib/amcharts/plugins/export/export.min.js') }}
    {{ HTML::script('js/lib/amcharts/themes/light.js') }}

    <!--  Scripts-->
    {{ HTML::script('js/adminhome/init.js') }}
    <script src="https://use.fontawesome.com/3461617f50.js"></script>
    @yield('js')
  </body>
</html>
