@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>{{Lang::get("register.register")}}</h3></div>
                  <div class="panel-body">
                    <form class="col s12" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                      <div class="row">
                        <div class="input-field col s6 {{ $errors->has('email') ? ' has-error' : '' }}">
                          <input placeholder='{{Lang::get("register.mail")}}' id="email" name="email" type="email" value="{{ old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                              <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                            @endif
                          <label for="email" {{ $errors->has('email') ? 'data-error="wrong"' : 'data-success="right"' }}>{{Lang::get("register.mail")}}</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6 {{ $errors->has('password') ? ' has-error' : '' }}">
                          <input placeholder='{{Lang::get("register.pass")}}' id="password" name="password" type="password" required>
                            @if ($errors->has('password'))
                              <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                              </span>
                            @endif
                          <label for="password" {{ $errors->has('password') ? 'data-error="wrong"' : 'data-success="right"' }}>{{Lang::get("register.pass")}}</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s6 {{ $errors->has('password') ? ' has-error' : '' }}">
                          <input placeholder='{{Lang::get("register.repass")}}' id="password-confirm" name="password-confirm" type="password" required>
                            @if ($errors->has('password'))
                              <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                              </span>
                            @endif
                          <label for="password-confirm" {{ $errors->has('password-confirm') ? 'data-error="wrong"' : 'data-success="right"' }}>{{Lang::get("register.repass")}}</label>
                        </div>
                      </div>
                      <div class="row">
                        <div class="input-field col s6 {{ $errors->has('password') ? ' has-error' : '' }}">
                          <input placeholder='{{Lang::get("register.birth")}}' id="birthdate" name="birthdate" type="text"  class="datepicker" required>
                            @if ($errors->has('birthdate'))
                              <span class="help-block">
                                <strong>{{ $errors->first('birthdate') }}</strong>
                              </span>
                            @endif
                          <label for="birthdate" {{ $errors->has('birthdate') ? 'data-error="wrong"' : 'data-success="right"' }}>{{Lang::get("register.birth")}}</label>
                        </div>
                      </div>
                      <div class="row">
                          <div class="col s3 offset-s1">
                            <button class="btn waves-effect waves-light" type="submit">{{Lang::get("register.register2")}}
                              <i class="material-icons right">check</i>
                            </button>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
{{ HTML::script('js/adminhome/register.js') }}
@endsection
