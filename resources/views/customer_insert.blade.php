@extends('layouts.admin')
@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

<form method="POST" action="submitcustomer" align="center">
{{ csrf_field() }}
<fieldset>
<legend>Insert Data:</legend>
    <div>
    <!-- <label> Enter the Exteas id </lable>
        <div>
            <input type="number" name="customers_id" />
        </div> -->
        <label> Enter the First Name </lable>
        <div>
            <input type="text" name="first_name" />
        </div>
        <label> Enter the Last Name </lable>
        <div>
            <input type="text" name="last_name" />
        </div>
        <label> Enter the Address </lable>
        <div>
            <input type="text" name="address" />
        </div>
        <label> Enter the Email  </lable>
        <div>
            <input type="text" name="email" />
        </div>
        <label> Enter the Password </lable>
        <div>
            <input type="text" name="password" />
        </div>
        <label> Enter the Password Con</lable>
        <div>
            <input type="text" name="cmpassword" />
        </div>
      
        <label> Enter the Phone Number </lable>
        <div>
            <input type="text" name="phone_number" />
        </div>
    
        <div>
            <input type="submit" name="add" value="Add"/>
            <a href="{{ route('customers')}}">Back</a>
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
