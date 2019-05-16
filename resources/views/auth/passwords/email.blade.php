@extends('layouts.forms.general',['formurl'=>route('password.email'),'formname'=>'sendReset'])

@section('form-content')
    @include('partials.forms.email')
@endsection
