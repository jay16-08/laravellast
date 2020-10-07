@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>
<marquee direction="right">
<h1>Report</h1>
</marquee>
<form action="submitroomr" method="get" align="center">
       
         <select name="roomtype" id="">
                <option value="1">Select Room Type</option>
                @foreach($data2 as $roomt)
                    <option value="{{$roomt -> room_type_id}}"  >{{$roomt ->descriptionroomtype}}</option>
                
                    @endforeach
            </select> 
         
        
           <br> <input type="submit" name="submitroomr" value="Submit"/>
      
           </form>
<br>
 
</script>


<h2 align="center">Room Type Booking   </h2>

<div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
<tr>
<!-- {{ $no=0}} -->
<td> No </td>
<td>Booking Id</td>
<!--  <td>Room Id</td> 
  <td>Customer Id</td>
 <td>Exteas Id</td> 
 <td>room_type_id</td>
 -->
<td>First Name</td>
<td>Last Name</td>
<td>Booking Date</td> 
<td>Check In</td>
<td>Check Out </td>
<td>Room Name</td>
<td>Description Extras</td>
<td>Amount</td>


</tr>
@foreach ($bookings as $booking)

<tr>
<td>{{ $no=$no+1 }}</td>
<td>{{ $booking->booking_id }}</td>
<!-- <td>{{ $booking->room_id }}</td>
<td>{{ $booking->customers_id}}</td>
<td>{{ $booking->id}}</td> 
<td> {{ $booking->room_type_id }} </td>
 -->
<td> {{ $booking->first_name}} </td>
<td> {{ $booking->last_name}} </td>
<td>{{ $booking->booking_date }}</td> 
<td>{{ $booking->check_in}}</td>
<td>{{ $booking->check_out}}</td>
<td> {{$booking->descriptionroomtype}} </td>
<td> {{ $booking->descriptionextras}} </td>
<td>{{ $booking->Amount}}</td>


</tr>

@endforeach
</table>
</div>

<br>


<form action="submitroomd" method="get" align="center">
       <lable>Check In Date</lable><br>
         <input type="date" name="checkind" value="2020-10-08">
           <br> <input type="submit" name="submitroomd" value="Submit"/>
      
           </form>



           <h2 align="center">  Checking Date Of Booking   </h2>

<div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
<tr>
<!-- {{ $no=0}} -->
<td> No </td>
<td>Booking Id</td>
<!--  <td>Room Id</td> 
  <td>Customer Id</td>
 <td>Exteas Id</td> 
 <td>room_type_id</td>
 -->
<td>First Name</td>
<td>Last Name</td>
<td>Booking Date</td> 
<td>Check In</td>
<td>Check Out </td>
<td>Room Name</td>
<td>Description Extras</td>
<td>Amount</td>



</tr>
@foreach ($bookingd as $booking)

<tr>
<td>{{ $no=$no+1 }}</td>
<td>{{ $booking->booking_id }}</td>
<!-- <td>{{ $booking->room_id }}</td>
<td>{{ $booking->customers_id}}</td>
<td>{{ $booking->id}}</td> 
<td> {{ $booking->room_type_id }} </td>
 -->
<td> {{ $booking->first_name}} </td>
<td> {{ $booking->last_name}} </td>
<td>{{ $booking->booking_date }}</td> 
<td>{{ $booking->check_in}}</td>
<td>{{ $booking->check_out}}</td>
<td> {{$booking->descriptionroomtype}} </td>
<td> {{ $booking->descriptionextras}} </td>
<td>{{ $booking->Amount}}</td>
</tr>

@endforeach
</table>
</div>




        @endsection