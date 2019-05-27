<div class="card">
    <div class="card-header">{{ $payment->description }}</div>
    <div class="card-body">
        {{ Form::open(['url'=>'/payment/select','method'=>'post']) }}
        {{ Form::hidden('payment_id',$payment->id) }}
        {{ Form::button(__('forms/buttons.select'),['type'=>'submit','class'=> 'btn btn-primary']) }}
        {{ Form::close() }}
    </div>
</div>
