@extends('layouts.forms.general',['formname'=>'add_contact','formurl'=>$url])

@section('form-content')
    @include('partials.forms.contact')
    @include('partials.forms.contact-confirm')
@endsection
