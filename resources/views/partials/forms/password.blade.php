@extends('layouts.forms.attributes',['varname'=>'password'])

@section('form-content-attribute-password')
    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$^+=!*()@%&]).{8,}" autocomplete="new-password">
    <br>
    <p>({{ __('forms/attributes.password_requirements') }})</p>
    <ul>
        @foreach(__('forms/attributes.password_requirements_list') as $requirement)
            <li>{{ $requirement }}</li>
        @endforeach
    </ul>
@endsection