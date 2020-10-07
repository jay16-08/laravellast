
@extends('layouts.admin')

@section('content')
@if($message = Session::get('success'))
<div>
<p>{{$message}}</p>
</div>
@endif
<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>
<br><br>
<h2 align="center"> Booking Table  </h2>

<div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
<tr>
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

<td> Show  |  Delete  </td>

</tr>
@foreach ($bookings as $booking)
<tr>
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
<td> 
<a href="{{ route('booking_view',['id' => $booking->booking_id])}}"> Show | </a>
<a href="{{ route('booking_delete',['id' => $booking->booking_id])}}"> Delete</a>
</td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
@endsection