

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
@foreach ($data as $user)
<table align="center"  style="text-align:center" class="myOtherTable">
<tr>
  <th colspan="2"> Room_Type Table</th><tr>
<td>Id</td>
<td>{{ $user->room_type_id }}</td><tr>
<td>Description</td>
<td>{{ $user->descriptionroomtype }}</td><tr>
<td>Amount</td>
<td>{{ $user->amountroomtype }}</td><tr>
<td colspan="2" ><a href="{{ route('room_types')}}">Back</a></td>
</tr>
</table>
@endforeach


</div>



</div>
  

</body>
</html>
