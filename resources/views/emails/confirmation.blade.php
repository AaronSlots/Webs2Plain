@component('mail::message')

Bevestig alstublieft dat {{\Crypt::decrypt($user->firstname).' '.\Crypt::decrypt($user->prepositions).' '.\Crypt::decrypt($user->lastname)}} u aan zijn/haar contactenlijst mag toevoegen.

@component('mail::button', ['url' => $url])
Bevestig
@endcomponent
