@extends('index')
@section('customer')

<!-- Header Area End -->

            
    
            <div class="container page-top"> 

                <!-- Page Heading/Breadcrumbs -->
              
                <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/61.png);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-center">
                            <div class="col-12">
                                <div class="breadcrumb-content text-center">
                                    <h2 class="page-title">Our Room</h2>
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb justify-content-center">
                                            <li class="breadcrumb-item"><a href="customerindex">Home</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">BOOKING</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 
                 <h1 align="center" class="mt-4 mb-3 pb-1" style="background-color: #1679fc; color: #ffffff">BOOKING 
                    <!-- <small>Subheading</small> -->
                  </h1> 
                <!-- Intro Content -->
               

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BOOKING</title>
    </head>
    <body>
        
    <?php
        use Carbon\Carbon;
        $today = Carbon::today();

        ?>
    <form action="submitbooking" method="get">
        <lable>Booking Date</lable>
        <input type="text" name="bookingdate" value="{{$today}}" ><br>
         <select name="roomtype" id="">
                <option value="1">Select Room Type</option>
                @foreach($data2 as $roomt)
                    <option value="{{$roomt -> room_type_id}}"  >{{$roomt ->descriptionroomtype}}</option>
                
                    @endforeach
            </select> <br> <br>
            <label>Checkin</label>
        <input type="date" name="Checkin"><br>
        <label>CheckOut</label>
        <input type="date" name="Checkout">
        
           <br> <input type="submit" name="submitbooking" value="Submit"/>
      
           </form>
<br>

<form action="submitbookingc" method="get" >
        <select name="rooms" id="">
                <option value="0">Select Room</option>
                @foreach($data6 as $rooms)
                    <option value="{{$rooms->room_id}}"  >{{$rooms->room_id}}</option>
                @endforeach
            </select> <br> <br>
            <select name="rooms" id="">
                
                @foreach($data5 as $extr)
                    <option value="{{$extr->id}}"  >{{$extr->descriptionextras}}</option>
                @endforeach
            </select> <br> <br>
            <br> <input type="submit" name="submitbooking" value="Submit"/>
    </form>
  
    
    </html>

        <!-- Breadcrumb Area Start -->
        <!-- Partner Area End -->
    
            <!-- Footer Area Start -->
        @endsection
