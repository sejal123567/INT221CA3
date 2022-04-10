
@extends('layout')

@section('content')
<h1 style="width: 70% ; margin: auto ; padding : 14px">SIGN UP</h1>
<form action="/createsubmit" method="POST" style="width: 70% ; margin: auto">
        @csrf
        <div class="form-group" >
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name"id="name" placeholder="Enter Name">

  </div>
  
  <div class="form-group" >
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email"id="exampleInputEmail1"  placeholder="Enter email">
   
  </div>
  <div class="form-group" >
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
         @endsection