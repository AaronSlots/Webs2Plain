@extends('layouts.app',['name'=>'group_members'])

@section('content')
    <div class="card-deck">
        @foreach ($members as $member)
            @include('partials.member',['member'=>$member])
        @endforeach
        @include('partials.add-member',['group'=>$group])
    </div>
@stop
