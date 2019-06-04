@extends('layouts.app')

@section('content')
    
<form action="{{route('sub.register')}}" method="POST">
    {{csrf_field()}}
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="" class=" form control @error('todo') is-invalid @enderror">
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="" class=" form control @error('todo') is-invalid @enderror">
    <label for="lname">Programme</label>
    <input type="text" name="prog" id="" class=" form control @error('todo') is-invalid @enderror">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="" class=" form control @error('todo') is-invalid @enderror">
    <label for=""></label>
    <input type="submit" value="subscribe" >
    @error('todo')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</form>




@endsection