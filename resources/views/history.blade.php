@extends('index')
@section('customer')

@if($message = Session::get('success'))
<div>
<p style="text-align:center;color : green" ><b>{{$message}}</b></p>
</div>
@endif

<?php
        use Carbon\Carbon;
        $today = Carbon::today();

        ?>

<div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/16.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content text-center">
                        <h2 class="page-title">Our Room</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="customerindex">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">History</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <!--    {{$names = Session::get('email')}} -->
   

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
<!-- <td>Booking Id</td> -->
 <td>Room Number</td> 
  <!-- <td>Customer Id</td> -->
  <td>Description Extras</td>
<!--  <td>room_type_id</td> -->
<td>Booking Date</td> 
<td>Check In</td>
<td>Check Out </td>
<td>Room Name</td>

<td>Amount</td>

<td>  Delete  </td>

</tr>
@foreach ($bookings as $booking)
@if($names == $booking->first_name)
<tr>
<!-- <td>{{ $booking->booking_id }}</td> -->
<td>{{ $booking->room_id }}</td>
<td> {{ $booking->descriptionextras}} </td>

<td>{{ $booking->booking_date }}</td> 


<td>{{ $booking->check_in}}</td>
<td>{{ $booking->check_out}}</td>
<td> {{$booking->descriptionroomtype}} </td>

<td>{{ $booking->Amount}}</td>
<td> 
@if($booking->check_in > $today)
<a href="{{ route('booking_deletec',['id' => $booking->booking_id])}}"> Delete</a>
@endif
</td>
</tr>
@endif
@endforeach
</table>
</div>
</body>
</html>


@endsection