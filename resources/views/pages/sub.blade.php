@extends('layouts.app')

@section('content')
    
<form action="{{route('sub.register')}}" method="POST">
    {{csrf_field()}}
    <label for="fname">First Name</label>
    <input type="text" name="fname" id="">
    <label for="lname">Last Name</label>
    <input type="text" name="lname" id="">
    <label for="lname">Programme</label>
    <input type="text" name="prog" id="">
    <label for="email">E-mail</label>
    <input type="email" name="email" id="">
    <label for=""></label>
    <input type="submit" value="subscribe" >
</form>




@endsection