@extends('layouts.forms.attributes',['varname'=>'iban'])

@section('form-content-attribute-iban')
    <input id="iban" type="text" class="form-control @error('iban') is-invalid @enderror" name="iban" value="{{ $iban }}" required pattern="^[A-Z0-9]{15,36}" autocomplete="iban">
    @stop
