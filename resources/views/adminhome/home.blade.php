@extends('layouts.app')

@section('content')
<div class="parallax-container">
    <div class="parallax"><img src="images/ns150.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header center-align">{{Lang::get("app.namecomp")}}</h2>
      <p class="grey-text text-darken-3 lighten-3 center-align flow-text">{{Lang::get("app.descrpcomp2")}}.</p>
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
