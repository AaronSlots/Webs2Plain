@extends('layouts.app',['name'=>$formname])

@section('content')
    {{ Form::open(['url'=>$formurl,'method'=>'post']) }}
    @yield('form-content')
    @include('partials.forms.button',['btnname'=>$formname])
    {{ Form::close() }}
@endsection