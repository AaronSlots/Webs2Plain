@extends('layouts.forms.general',['formname'=>'update_card','formurl'=>$url])

@section('form-content')
    @include('partials.forms.iban', ['iban'=>$iban])
    @include('partials.forms.description', ['description'=>$description])
    @stop
