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
<h2 align="center">
<a href="{{ route('room_insert')}}"> Insert</a>
</h2>
<h2 align="center"> Rooms Table </h2>
<div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
<tr>
<td>Room_Id</td>
<td>Room_Type_Id</td>
<td>Description</td>
<td>Amount</td>
<td>Max_People</td>
<td>   Edit | Show | Delete  </td>

</tr>
@foreach ($rooms as $room)
<tr>
<td>{{ $room->room_id }}</td>
<td> {{ $room->room_type_id }}</td>
<td> {{ $room->descriptionroomtype}}</td>
<td> {{ $room->amountroomtype}}</td>
<td> {{ $room->max_occupancy}} </td>
<td> 
  
<a href="{{ route('room_edit',['id' => $room->room_id])}}"> Edit | </a>
  <a href="{{ route('room_view',['id' => $room->room_id])}}"> Show | </a>
  <a href="{{ route('room_delete',['id' => $room->room_id])}}"> Delete</a>

</td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
@endsection