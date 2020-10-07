@extends('layouts.admin')
@section('content')


<form method="POST" action="submitroomtype" align="center">
{{ csrf_field() }}
<fieldset>
<legend>Insert Data:</legend>
    <div>
    <label> Enter the Room_Type id </lable>
        <div>
            <input type="number" name="room_type_id" />
        </div>
        <label> Enter the Room Type Description </lable>
        <div>
            <input type="text" name="descriptionroomtype" />
        </div>
        <label> Enter the Room Amount </lable>
        <div>
            <input type="number" name="amountroomtype" />
        </div>
        <div>
            <input type="submit" name="" value="submitroomtype"/>
            <a href="{{ route('room_types')}}">Back</a>
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
