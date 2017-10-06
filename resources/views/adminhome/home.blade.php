@extends('layouts.app')

@section('content')
<div class="parallax-container">
    <div class="parallax"><img src="images/ns150.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header center-align">AdminHome</h2>
      <p class="grey-text text-darken-3 lighten-3 center-align flow-text">Bienvenidos a la nueva forma de administrar tu recursos.</p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="images/r1.jpg"></div>
  </div>
</div>
@endsection
@section('js')
{{ HTML::script('js/adminhome/home.js') }}
@endsection
