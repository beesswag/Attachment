@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success')}}</div>
        @endif
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> ToDo Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <a href="/about">Link</a>
                    <a href="/sub">Subscribe to a Magazine Newsletter</a>
                </div>

                <div class="card-body mb-10">
                    <form action="{{route('todo.store')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <input type="text" name="todo" class="form-control mb-10 @error('todo') is-invalid @enderror" placeholer="Your Activity" required>
                            @error('todo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" value="Add Activity">
                    </form>
                </div>

            </div>
        </div>

        <div class="col-md-8">
            <div class="card deafault mt-4">
                <div class="card header">Your Activities</div>
                <div class="card-body">
                    @foreach($todos as $todo)
                    <p>{{$todo->todo}} <a href="{{route('todo.edit', $todo->id)}}">Edit Activity</a></p>
                    <form action="{{route('todo.delete', $todo->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <div class="col-md-8"><button type="submit">Delete</button></div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
