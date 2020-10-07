
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Room</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</head>
<body>

<div class="jumbotron text-center">

<div class="row">
    <div class="col-md-12">
    <h3>Edit</h3>
    @foreach ($data1 as $user)
   
    <form method="GET" action="{{ route('submiteditroom',['id' => $user->room_id])}}">
    {{csrf_field()}}
   
    <input type="hidden" name="_method" value="PATCH"/>
    <label> Enter the Room id </lable>
        <div>
            <input type="number" name="room_id" value="{{$user->room_id}}" />
        </div>
        <label> Enter the  Max Occupancy </lable>
        <div>
            <input type="number" name="max_occupancy" value="{{$user->max_occupancy}}" />
        </div> 
        <label> Enter the  Room Type </lable><br>
        <select name="room_type_id" class="form-control">
        <option value="{{$user->room_type_id}}">Select Room Type </option>
        @foreach($data2 as $user)
       <option value="{{$user->room_type_id}}"> {{$user->descriptionroomtype}} </option>
        @endforeach
        </select> 
       
        <div>
            <input type="submit" name="add" value="Add"/>
            <a href="{{ route('rooms')}}">Back</a>
        </div>
    

    </form>
    @endforeach
    </div>
</div>

</div>



</div>
  

</body>
</html>
