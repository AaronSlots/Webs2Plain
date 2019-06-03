@extends('layouts.forms.general',['formname'=>'update_card','formurl'=>$url])

@section('form-content')
    @if(isset($card_id))
        {{ Form::hidden('card_id',$card_id) }}
    @endif
    @include('partials.forms.iban')
    @include('partials.forms.description')
@endsection
