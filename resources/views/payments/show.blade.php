@extends('layouts.app',['name'=>'payments'])

@section('content')
    @foreach ($payments as $payment)
        @include('partials.payment',['payment'=>$payment])
    @endforeach
    @include('partials.create-payment')
@endsection
