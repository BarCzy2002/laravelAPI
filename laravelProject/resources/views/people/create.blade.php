@extends('people.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Add new record</div>
  <div class="card-body">
      
      <form action="{{ url('czyszek/50213/people') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Last name</label></br>
        <input type="text" name="lastname" id="lastname" class="form-control"></br>
        <label>Phone number</label></br>
        <input type="text" name="phoneNumber" id="phoneNumber" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop