@extends('layouts.forms.attributes',['varname'=>'value'])

@section('form-content-attribute-value')
    <input id="value" type="number" step="0.01" class="form-control @error('value') is-invalid @enderror" name="value" required min="0.01" autocomplete="title">
@stop
