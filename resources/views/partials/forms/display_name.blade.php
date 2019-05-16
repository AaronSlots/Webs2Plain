@extends('layouts.forms.attributes',['varname'=>'display_name'])

@section('form-content-attribute-display_name')
    <input id="display_name" type="text" class="form-control @error('display_name') is-invalid @enderror" name="display_name" value="{{ old('display_name') }}" required pattern="^[A-Z][a-z]+( [A-Z][a-z]+){0,1}$" autocomplete="display_name">
@endsection