@extends('layouts.app',['name'=>'cards'])

@section('content')
    <div class="card-deck">
        @foreach(auth()->user()->cards() as $card)
            @include('partials.cards',['card'=>$card])
        @endforeach
        @include('partials.create-card')
    </div>
@endsection
