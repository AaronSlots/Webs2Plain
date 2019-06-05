@extends('layouts.forms.attributes',['varname'=>'email'])

@section('form-content-attribute-email')
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">
@endsection
