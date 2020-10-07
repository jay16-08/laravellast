


<!DOCTYPE html>
<html>
 <head>
  <title> Registration </title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Registration</h3><br />

   @if(isset(Auth::user()->email))
    <script>window.location="/login/successlogin";</script>
   @endif

   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="submitcustomer" align="center">
    {{ csrf_field() }}
    <div class="form-group">
    <label> Enter the First Name </lable>
        <div>
            <input type="text" name="first_name" />
        </div>
        <label> Enter the Last Name </lable>
        <div>
            <input type="text" name="last_name" />
        </div>
        <label> Enter the Address </lable>
        <div>
            <input type="text" name="address" />
        </div>
        <label> Enter the Email  </lable>
        <div>
            <input type="text" name="email" />
        </div>
        <label> Enter the Password </lable>
        <div>
            <input type="text" name="password" />
        </div>
        <label> Enter the Password Con</lable>
        <div>
            <input type="text" name="cmpassword" />
        </div>
      
        <label> Enter the Phone Number </lable>
        <div>
            <input type="text" name="phone_number" />
        </div>
    
        <div>
           
            <input type="submit"  class="btn btn-primary" value="Submit" />
    
        </div>
        <li><a href="./login">Login</a></li>
    </div>
    
   </form>
  </div>
 </body>
</html>