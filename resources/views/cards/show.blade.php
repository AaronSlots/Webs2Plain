@extends('layouts.app',['name'=>'cards'])

@section('content')
    <div class="card-deck">
        @foreach ($cards as $card)
            @include('partials.card',['card'=>$card])
        @endforeach
        @include('partials.create-card')
    </div>
@endsection
