@extends('layouts.forms.attributes',['varname'=>'description'])

@section('form-content-attribute-description')
    <textarea id="description" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $description }}" autocomplete="description" rows="5"></textarea>
@stop
