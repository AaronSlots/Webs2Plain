@extends('layouts.app',['name'=>'contacts'])

@section('content')
    <div class="card-deck">
        @foreach ($contacts as $contact)
            @include('partials.contact',['contact'=>$contact->contact])
        @endforeach
        @include('partials.create-contact')
    </div>
    @stop
