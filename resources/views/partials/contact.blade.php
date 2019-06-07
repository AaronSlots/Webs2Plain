<a class="btn card bg-primary text-white" style="max-width: 15rem;"  href={{route('contacts.show',['contact'=>$contact])}}>
    <div class="card-header">{{ Crypt::decrypt($contact->firstname).' '.Crypt::decrypt($contact->prepositions).' '.Crypt::decrypt($contact->lastname) }}</div>
    <div class="card-body">
        <p class="card-text">{{ $contact->email }}</p>
    </div>
</a>
