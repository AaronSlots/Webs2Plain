@extends('layouts.app',['name'=>'payments'])

@section('content')
    <div class="card-deck">
        @foreach ($payments as $payment)
            @include('partials.payment',['payment'=>$payment])
        @endforeach
        @include('partials.create-payment')
    </div>
@endsection
