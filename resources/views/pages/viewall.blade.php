@extends('layouts.app')

@section('content')

@if(count($members)>0)
    @foreach($members as $member)
        <div class="well col-md-12">
            <h3><a href="{{ route('viewindividual',$member->id)}}">{{$member->email}}</a></h3>
        </div>
    @endforeach
@else
    <p>no members</p>
@endif
@endsection