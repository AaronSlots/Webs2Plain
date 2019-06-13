<a class="btn card bg-primary text-white" style="max-width: 15rem; min-width:15rem;"  href="{{route('cards.payments.index',['card'=>$card])}}">
    <div class="card-header">{{ Crypt::decrypt($card->iban) }}</div>
    <div class="card-body">
        <p class="card-text">{{ Crypt::decrypt($card->description) }}</p>
    </div>
</a>
