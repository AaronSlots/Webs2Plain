@extends('layouts.app')

@section('content')
    <div class="card-deck">
        @foreach($cards as $card)
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                <ul class="list-group">
                @foreach($card->subscriptions() as $subscription)
                    <li class="list-group-item">
                    <div class="list-group">
                    @foreach($subscription->payments() as $payment)
                        @if(<!-- payment succesfull -->)
                            <a href="/payments/{{ $payment->id }}" class="list-group-item list-group-item-action list-group-item-success">
                        @else
                            <a href="/payments/{{ $payment->id }}" class="list-group-item list-group-item-action list-group-item-danger">
                        @endif
                        <!-- payment description -->
                        </a>
                    @endforeach
                    </div>
                    </li>
                @endforeach
                </ul>
                </div>
                <div class="card-footer">

                </div>
            </div>
        @endforeach
        <div class="card">
            <div class="card-body">
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
@endsection