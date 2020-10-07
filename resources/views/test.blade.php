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
<a href="{{ route('exteas_insert')}}"> Insert</a>
</h2>
<h2 align="center"> Extras Table </h2>

<div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
             
<tr>
<td>Id</td>
<td>Description</td>
<td>Amount</td>
<td>   Edit | Show | Delete  </td>

</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->descriptionextras }}</td>
<td>{{ $user->amountextras }}</td>
<td> 
<a href="{{ route('exteas_edit',['id' => $user->id])}}"> Edit | </a>
  <a href="{{ route('exteas_viwe',['id' => $user->id])}}"> Show | </a>
  
  <a href="{{ route('exteas_delete',['id' => $user->id])}}"> Delete</a>

  

</td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
@endsection