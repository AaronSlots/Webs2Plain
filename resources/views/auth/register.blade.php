@extends('layouts.forms.general', ['formurl'=>route('register'),'formname'=>'register'])

@section('form-content')
    @include('partials.forms.firstname')
    @include('partials.forms.prepositions')
    @include('partials.forms.lastname')
    @include('partials.forms.email')
    @include('partials.forms.country')
    @include('partials.forms.password')
    @include('partials.forms.confirm-password')
@endsection