@extends('layouts.forms.general',['formname'=>'update_card','formurl'=>$url])

@section('form-content')
@include('partials.forms.currency')
@include('partials.forms.value')
@stop