@extends('layouts.app',['name'=>'groups'])

@section('content')
    <div class="card-deck">
        @foreach ($groups as $group)
            @include('partials.group',['group'=>$group->group])
        @endforeach
        @include('partials.create-group')
    </div>
@stop
