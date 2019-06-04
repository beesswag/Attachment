@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Edit Activity</div>

                <div class="card-body">
                    <form action="{{route('todo.update', $todo->id)}}" method="post">
                        {{csrf_field()}}
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <input type="text" value="{{ $todo->todo }}" name="todo" class="form-control" placeholer="Your Activity" required>
                        </div>
                        <input type="submit" value="Edit Activity">
                    </form>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection
