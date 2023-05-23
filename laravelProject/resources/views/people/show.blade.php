@extends('people.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Preview Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $people->name }}</h5>
        <p class="card-text">Last name : {{ $people->lastname }}</p>
        <p class="card-text">Phone number : {{ $people->phoneNumber }}</p>
        <p class="card-text">Address : {{ $people->address }}</p>
        <p class="card-text">Country : {{ $people->country }}</p>
  </div>
       
    </hr>
  
  </div>
</div>