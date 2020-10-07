@extends('layouts.admin')
@section('content')


<form method="POST" action="submit" align="center">
{{ csrf_field() }}
<fieldset>
<legend>Insert Data:</legend>
    <div>
    <label> Enter the Exteas id </lable>
        <div>
            <input type="number" name="id" />
        </div>
        <label> Enter the Exteas Description </lable>
        <div>
            <input type="text" name="descriptionextras" />
        </div>
        <label> Enter the Exteas Amount </lable>
        <div>
            <input type="number" name="amountextras" />
        </div>
        <div>
            <input type="submit" name="add" value="Add"/>
            <a href="{{ route('test')}}">Back</a>
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





