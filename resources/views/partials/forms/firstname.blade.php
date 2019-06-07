@extends('layouts.forms.attributes',['varname'=>'firstname'])

@section('form-content-attribute-firstname')
    <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" required pattern="^[A-Z][a-z]+$" autocomplete="firstname" autofocus>
    @stop
