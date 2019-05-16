@extends('layouts.forms.general',['formurl'=>route('password.update'),'formname'=>'reset'])

@section('form-content')
    @include('partials.forms.email')
    @include('partials.forms.password')
    @include('partials.forms.confirm-password')
    {{ Form::hidden('token',$token) }}
@endsection