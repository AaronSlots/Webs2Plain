@extends('layouts.forms.general',['formname'=>'update_group','formurl'=>$url])

@section('form-content')
    @include('partials.forms.title' ['title'=>$title])
    @include('partials.forms.description', ['description'=>$description])
    @include('partials.forms.members', ['iban'=>$iban])
@stop
