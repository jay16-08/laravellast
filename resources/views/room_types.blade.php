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
<title>Room_Type Table</title>
</head>
<body>
<br><br>
<h2 align="center">
<a href="{{ route('roomtype_insert')}}"> Insert</a>
</h2>
<h2 align="center"> Room_Type Table </h2>
<div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
<tr>
<td>Room_Type_Id</td>
<td>Description</td>
<td>Amount</td>
<td>   Edit | Show | Delete  </td>

</tr>
@foreach ($room_types as $room_type)
<tr>
<td>{{ $room_type->room_type_id }}</td>
<td>{{ $room_type->descriptionroomtype }}</td>
<td>{{ $room_type->amountroomtype }}</td>
<td> 
<a href="{{ route('roomtype_edit',['id' => $room_type->room_type_id])}}"> Edit | </a>
  <a href="{{ route('roomtypes_view',['id' => $room_type->room_type_id])}}"> Show | </a>
  <a href="{{ route('roomtype_delete',['id' => $room_type->room_type_id])}}"> Delete</a>
</td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
@endsection