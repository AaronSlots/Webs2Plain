@extends('layouts.forms.attributes',['varname'=>'title'])

@section('form-content-attribute-title')
    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" required pattern="^[A-Z][a-zA-Z]+$" autocomplete="title">
@stop
