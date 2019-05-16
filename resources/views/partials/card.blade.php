<div class="card">
    <div class="card-header">{{ $card->display_name }}</div>
    <div class="card-body">
        <p class="card-text">{{ $card->iban }}</p>
        {{ Form::open('url'=>'card/select','method'=>'post') }}
        {{ Form::token() }}
        {{ Form::hidden('card',$card) }}
        {{ Form::button(__('forms/buttons.'.$btnname),['type'=>'submit','class'=> 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
</div>