

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Room_Type Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>
<body align="center">

<div class="jumbotron text-center">

  <br><br><br><br>
 <!-- Start Styles. Move the 'style' tags and everything between them to between the 'head' tags -->
<style type="text/css">
.myOtherTable { background-color:#FFFFE0;border-collapse:collapse;color:#000;font-size:18px; }
.myOtherTable th { background-color:#BDB76B;color:white;width:50%; }
.myOtherTable td, .myOtherTable th { padding:5px;border:0; }
.myOtherTable td { border-bottom:1px dotted #BDB76B; }
</style>
<!-- End Styles -->
@foreach ($bookings as $user)
<table align="center"  style="text-align:center" class="myOtherTable">
<tr>
  <th colspan="2"> Booking  Description</th><tr>
<td> Booking Id</td>
<td>{{ $user->booking_id }}</td><tr>

 <td>Room Id</td> 
 <td>{{ $user->room_id }}</td><tr>
 <td>Customer Id</td>
 <td>{{ $user->customers_id}}</td><tr>
 <td>Exteas Id</td> 
 <td>{{ $user->id}}</td> <tr>
 <td>room_type_id</td>
 <td> {{ $user->room_type_id }} </td><tr>

<td>First Name</td>
<td>{{ $user->first_name }}</td><tr>
<td>Last Name</td>
<td>{{ $user->last_name }}</td><tr>
<td>Booking Date</td> 
<td>{{ $user->booking_date }}</td><tr>
<td>Check In</td>
<td>{{ $user->check_in }}</td><tr>
<td>Check Out </td>
<td>{{ $user->check_out }}</td><tr>
<td>Room Name</td>
<td>{{ $user->descriptionroomtype }}</td><tr>
<td>Description Extras</td>
<td>{{ $user->descriptionextras }}</td><tr>
<td>Amount</td>
<td>{{ $user->Amount }}</td><tr>

<!-- <td>Description</td>
<td>{{ $user->descriptionextras }}</td><tr>
<td>Amount</td>
<td>{{ $user->first_name }}</td><tr> -->
<td colspan="2" ><a href="/bookings">Back</a></td>
</tr>
</table>
@endforeach


</div>



</div>
  

</body>
</html>
