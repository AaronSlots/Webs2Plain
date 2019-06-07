@extends('layouts.forms.attributes',['varname'=>'contact'])

@section('form-content-attribute-contact')
    <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" required pattern="^[0-9]+$" autocomplete="firstname" autofocus>
@stop
