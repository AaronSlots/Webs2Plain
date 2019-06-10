@extends('layouts.forms.general',['formname'=>'add_members','formurl'=>"/groups/{{$group}}/members/create"])

@section('form-content')
    {{Form::select('member',$contacts->pluck('fullname'))}}
@stop
