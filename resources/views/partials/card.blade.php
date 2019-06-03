<a class="btn card bg-primary text-white" style="max-width: 15rem;"  href="/card/{{ Crypt::encrypt($card->id) }}/{{ Hash::make(Crypt::decrypt($card->iban)) }}/payments">
    <div class="card-header">{{ Crypt::decrypt($card->iban) }}</div>
    <div class="card-body">
        <p class="card-text">{{ Crypt::decrypt($card->description) }}</p>
    </div>
</a>
