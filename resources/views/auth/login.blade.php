@extends('layouts.forms.general', ['formurl'=>route('login'),'formname'=>'login'])

@section('form-content')
    @include('partials.forms.email')
    @include('partials.forms.password')
@endsection