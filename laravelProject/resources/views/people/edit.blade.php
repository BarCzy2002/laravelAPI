@extends('people.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('czyszek/50213/people/' .$people->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$people->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$people->name}}" class="form-control"></br>
        <label>Last name</label></br>
        <input type="text" name="lastname" id="lastname" value="{{$people->lastname}}" class="form-control"></br>
        <label>Phone number</label></br>
        <input type="text" name="phoneNumber" id="phoneNumber" value="{{$people->phoneNumber}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$people->address}}" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" value="{{$people->country}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop