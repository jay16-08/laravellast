<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
  

    public function index(Request $request)
    {
        $roomtype = $request->input('roomtype');
        $data2 = DB::table('room_types')->get();
        $bookings = DB::table('bookings')->join('rooms','rooms.room_id','=','bookings.room_id')
        ->join('room_types','room_types.room_type_id','=','rooms.room_type_id')->where('room_types.room_type_id',$roomtype)
        ->join('customers','customers.customers_id','=','bookings.customers_id')
        ->join('extras','extras.id','=','bookings.id')
        ->select('bookings.booking_id','room_types.descriptionroomtype','rooms.room_type_id','extras.descriptionextras','bookings.booking_date','rooms.room_id','customers.first_name','customers.last_name','customers.email','customers.customers_id','extras.id','bookings.check_in','bookings.check_out','bookings.Amount')
        ->get();
        $checkind = $request->input('checkind');
        $bookingd = DB::table('bookings')->join('rooms','rooms.room_id','=','bookings.room_id')->where('bookings.check_in',$checkind)
        ->join('room_types','room_types.room_type_id','=','rooms.room_type_id')
        ->join('customers','customers.customers_id','=','bookings.customers_id')
        ->join('extras','extras.id','=','bookings.id')
        ->select('bookings.booking_id','room_types.descriptionroomtype','rooms.room_type_id','extras.descriptionextras','bookings.booking_date','rooms.room_id','customers.first_name','customers.last_name','customers.email','customers.customers_id','extras.id','bookings.check_in','bookings.check_out','bookings.Amount')
        ->get();
        return view('home',['bookings'=>$bookings,'data2'=>$data2,'bookingd'=>$bookingd]);
    }
    public function indexr(Request $request)
    {
        $roomtype = $request->input('roomtype');
        $data2 = DB::table('room_types')->get();
        $bookings = DB::table('bookings')->join('rooms','rooms.room_id','=','bookings.room_id')
        ->join('room_types','room_types.room_type_id','=','rooms.room_type_id')->where('room_types.room_type_id',$roomtype)
        ->join('customers','customers.customers_id','=','bookings.customers_id')
        ->join('extras','extras.id','=','bookings.id')
        ->select('bookings.booking_id','room_types.descriptionroomtype','rooms.room_type_id','extras.descriptionextras','bookings.booking_date','rooms.room_id','customers.first_name','customers.last_name','customers.email','customers.customers_id','extras.id','bookings.check_in','bookings.check_out','bookings.Amount')
        ->get();
        $checkind = $request->input('checkind');
        $bookingd = DB::table('bookings')->join('rooms','rooms.room_id','=','bookings.room_id')->where('bookings.check_in',$checkind)
        ->join('room_types','room_types.room_type_id','=','rooms.room_type_id')
        ->join('customers','customers.customers_id','=','bookings.customers_id')
        ->join('extras','extras.id','=','bookings.id')
        ->select('bookings.booking_id','room_types.descriptionroomtype','rooms.room_type_id','extras.descriptionextras','bookings.booking_date','rooms.room_id','customers.first_name','customers.last_name','customers.email','customers.customers_id','extras.id','bookings.check_in','bookings.check_out','bookings.Amount')
        ->get();
        return view('home',['bookings'=>$bookings,'data2'=>$data2,'bookingd'=>$bookingd]);
    }

   
    public function indexd(Request $request)
    {
        $roomtype = $request->input('roomtype');
        $data2 = DB::table('room_types')->get();
        $bookings = DB::table('bookings')->join('rooms','rooms.room_id','=','bookings.room_id')
        ->join('room_types','room_types.room_type_id','=','rooms.room_type_id')->where('room_types.room_type_id',$roomtype)
        ->join('customers','customers.customers_id','=','bookings.customers_id')
        ->join('extras','extras.id','=','bookings.id')
        ->select('bookings.booking_id','room_types.descriptionroomtype','rooms.room_type_id','extras.descriptionextras','bookings.booking_date','rooms.room_id','customers.first_name','customers.last_name','customers.email','customers.customers_id','extras.id','bookings.check_in','bookings.check_out','bookings.Amount')
        ->get();
        $checkind = $request->input('checkind');
        $bookingd = DB::table('bookings')->join('rooms','rooms.room_id','=','bookings.room_id')->where('bookings.check_in',$checkind)
        ->join('room_types','room_types.room_type_id','=','rooms.room_type_id')
        ->join('customers','customers.customers_id','=','bookings.customers_id')
        ->join('extras','extras.id','=','bookings.id')
        ->select('bookings.booking_id','room_types.descriptionroomtype','rooms.room_type_id','extras.descriptionextras','bookings.booking_date','rooms.room_id','customers.first_name','customers.last_name','customers.email','customers.customers_id','extras.id','bookings.check_in','bookings.check_out','bookings.Amount')
        ->get();
        return view('home',['bookings'=>$bookings,'data2'=>$data2,'bookingd'=>$bookingd]);
    }




    public function test()
    {
        return view('testhome');
    }
    
}
