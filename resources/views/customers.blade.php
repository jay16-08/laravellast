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
<a href="{{ route('customer_insert')}}"> Insert</a>
</h2>
<h2 align="center"> Customer Table </h2>

<div class="box-body">
  <table class="table table-bordered">
<tr>
<td>First_Name</td>
<td>Last_Name</td>
<td>Address</td>
<td>Email ID</td>
<td>Phone Number</td>
<td>   Show | Delete  </td>

</tr>
@foreach ($customers as $customer)
<tr>
<td>{{ $customer->first_name }}</td>
<td>{{ $customer->last_name }}</td>
<td>{{ $customer->address }}</td>
<td>{{ $customer->email }}</td>
<td>{{ $customer->phone_number }}</td>
<td> 
  
<a href="{{ route('customer_view',['id' => $customer->customers_id])}}"> Show | </a>
<a href="{{ route('customer_delete',['id' => $customer->customers_id])}}"> Delete</a>
</td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
@endsection