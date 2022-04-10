
@extends('layout')

@section('content')
<h1 style="width: 40% ; margin: auto ; padding : 14px">List of Registered Users</h1>

<style>
  span{
  width : 200px;
  display:inline-block;
}
</style>
<div class="card text-black " style=" width: 70% ;margin: auto ; padding : 6px ; background-color: black">
  <ul class="list-group list-group-flush " >
    <li class="list-group-item " style="background-color: rgb(120, 120, 120) ; font-weight: bold;">
      <span> Id</span>
      <span> Name</span>
      <span> Email</span>
    </li>
  @foreach($user as $users)
    <li class="list-group-item " style="background-color: rgba(192,192,192,0.9)">
    <span >{{$users->id}}</span> 
    <span >{{$users->name}}</span>
      <span>{{$users->email}}</span>
    </li>
    @endforeach
  </ul>
</div>


         @endsection