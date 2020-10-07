@extends('layouts.admin')
@section('content')


<form method="POST" action="submitroom" align="center">
{{ csrf_field() }}
<fieldset>
<legend>Insert Data:</legend>
    <div>
    <label> Enter the Exteas id </lable>
        <div>
            <input type="number" name="room_id" />
        </div>
        <label> Enter the Exteas room Type </lable>
        <div>
            <input type="number" name="room_type_id" />
        </div>
        <label> Enter the max_occupancy </lable>
        <div>
            <input type="number" name="max_occupancy" />
        </div>
        <div>
            <input type="submit" name="add" value="Add"/>
            <a href="{{ route('rooms')}}">Back</a>
        </div>
       
    </div>
    </fieldset>
</from>


<html>
<head>
<style>
fieldset {
  background-color: #eeeeee;
}

legend {
  background-color: gray;
  color: white;
  padding: 5px 10px;
}

input {
  margin: 5px;
}
</style>
</head>
<body>

@endsection