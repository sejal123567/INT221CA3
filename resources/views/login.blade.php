@extends('layout')

@section('content')
<h1 style="width: 70% ; margin: auto ; padding : 14px">LOGIN</h1>
<form action="/loginsubmit" method="POST" style="width: 70% ; margin: auto">
        @csrf
  
  <div class="form-group" style="width: 18rem ;">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" id="email">
  </div>
  <div class="form-group" style="width: 18rem ;">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
         @endsection

