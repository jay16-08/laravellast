<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Exteas</title>
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
    @foreach ($data as $user)
    <form method="GET" action="{{ route('submiteditexteas',['id' => $user->id])}}">
    {{csrf_field()}}
   
    <input type="hidden" name="_method" value="PATCH"/>
    <label> Enter the Exteas id </lable>
        <div>
            <input type="number" name="id" value="{{$user->id}}" />
        </div>
        <label> Enter the Exteas Description </lable>
        <div>
            <input type="text" name="descriptionextras" value="{{$user->descriptionextras}}" />
        </div>
        <label> Enter the Exteas Amount </lable>
        <div>
            <input type="number" name="amountextras" value="{{$user->amountextras}}" />
        </div>
        <div>
            <input type="submit" name="add" value="Add"/>
            <a href="{{ route('test')}}">Back</a>
        </div>
    

    </form>
    @endforeach
    </div>
</div>

</div>



</div>
  

</body>
</html>
