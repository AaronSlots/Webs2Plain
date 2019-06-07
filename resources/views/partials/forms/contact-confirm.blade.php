
@extends('layouts.forms.attributes',['varname'=>'contact_confirm'])

@section('form-content-attribute-contact_confirm')
    <input id="contact_confirm" type="text" class="form-control @error('contact_confirm') is-invalid @enderror" name="contact_confirm" required pattern="^[0-9A-Za-z]{20}$" autocomplete="contact_confirm" autofocus>
@stop
