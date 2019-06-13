<a class="btn card bg-success text-white" href="{{route('cards.payments.create',['card'=>$card])}}">
    <div class="card-header">{{ __('payments.new') }}</div>
    <div class="card-body">
        <p class="card-text">{{ __('payments.new_link') }}</p>
    </div>
</a>
