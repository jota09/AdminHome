@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>{{Lang::get("config.title")}}</h2></div>
                <div class="panel-body">
                  <ul class="collapsible popout" data-collapsible="accordion">
                    <li>
                      <div class="collapsible-header"><i class="fa fa-cogs" aria-hidden="true"></i>{{Lang::get("config.confige")}}</div>
                      <div class="collapsible-body"><span>@include('adminhome.confige')</span></div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons">attach_money</i>{{Lang::get("config.earnings")}}</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="fa fa-cogs" aria-hidden="true"></i>{{Lang::get("config.configo")}}</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                      <div class="collapsible-header"><i class="material-icons">money_off</i>{{Lang::get("config.outgoings")}}</div>
                      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
{{ HTML::script('js/adminhome/config.js') }}
@endsection
