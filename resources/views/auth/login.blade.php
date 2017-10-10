@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <h3 class="center-align"> {{Lang::get("login.start")}}!? </h3>
  </div>
  <div class="row">
    <form class="col s12" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
      <div class="row">
        <div class="input-field col s6 {{ $errors->has('email') ? ' has-error' : '' }}">
          <input placeholder='{{Lang::get("login.mail")}}' id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
              <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
              </span>
            @endif
          <label for="email" {{ $errors->has('email') ? 'data-error="wrong"' : 'data-success="right"' }}>{{Lang::get("login.mail")}}</label>
        </div>
        <div class="input-field col s6">
          <label for="password" {{ $errors->has('password') ? 'data-error="wrong"' : 'data-success="right"' }} >{{Lang::get("login.pass")}}</label>
          <input placeholder='{{Lang::get("login.pass")}}' id="password" name="password" type="password" required>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
        </div>
      </div>
      <div class="row">
        <div class="col s2 offset-s1">
          <p>
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
            <label for="remember">{{Lang::get("login.remember")}}</label>
          </p>
        </div>
        <div class="col s8">
          <button class="btn waves-effect waves-light" type="submit" name="action">{{Lang::get("login.login")}}
            <i class="material-icons right">send</i>
          </button>
          <a class="btn btn-link" href="{{ route('password.request') }}">
            {{Lang::get("login.forgot")}}? &nbsp;<i class="fa fa-refresh" aria-hidden="true"></i>
          </a>
        </div>

      </div>
    </form>
  </div>
</div>
@endsection
