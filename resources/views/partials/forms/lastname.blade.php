@extends('layouts.forms.attributes',['varname'=>'lastname'])

@section('form-content-attribute-lastname')
    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required pattern="^[A-Z][a-z]+$" autocomplete="lastname">
@endsection