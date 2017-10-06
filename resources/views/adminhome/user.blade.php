@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{!! $title !!}</div>
                <div class="panel-body">
                    @if (isset($grid))
                        {!! $filter !!}
                        {!! $grid !!}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
{{ HTML::script('js/adminhome/user.js') }}
@endsection
