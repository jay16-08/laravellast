<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class bookingcController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
     /*    $value = $request->session()->get('email'); */
     $roomtype = $request->input('roomtype');
     $Checkin = $request->input('Checkin');
     $Checkout = $request->input('Checkout');
     $data1 = DB::table('customers')->get(); 
     $data2 = DB::table('room_types')->get();
     $data3 = DB::table('rooms')->get();
     $data4 = DB::table('bookings')->get();
     $data5 = DB::table('extras')->get();

      $data6 = DB::table('rooms')->where('room_type_id',$roomtype)->get();
    
    
      return view('bookingc',[ 'data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5,'data6'=>$data6]);

    }

    public function indexc(Request $request)
    {
     /*    $value = $request->session()->get('email'); */
     $roomtype = $request->input('roomtype');
     $Checkin = $request->input('Checkin');
     $Checkout = $request->input('Checkout');
     $data1 = DB::table('customers')->get(); 
     $data2 = DB::table('room_types')->get();
     $data3 = DB::table('rooms')->get();
     $data4 = DB::table('bookings')->get();
     $data5 = DB::table('extras')->get();

      $data6 = DB::table('rooms')->where('room_type_id',$roomtype)->get();
    
    
      return view('bookingc',[ 'data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5,'data6'=>$data6]);

    }

    public function checkrooma(Request $request)
    {
        $checkin_date = $request->input('checkin_date');
        $checkout_date = $request->input('checkout_date'); 
        $room = $request->input('room');
        $data1  = DB::table('rooms')->where('room_type_id',$room)->get();
        $data2 = DB::table('bookings')->whereBetween('check_in', [$checkin_date, $checkout_date])->whereBetween('check_out', [$checkin_date, $checkout_date])
        ->join('rooms','rooms.room_id','=','bookings.room_id')
        ->join('room_types','room_types.room_type_id','=','rooms.room_type_id')
        ->join('customers','customers.customers_id','=','bookings.customers_id')
        ->join('extras','extras.id','=','bookings.id')
        ->select('bookings.booking_id','room_types.descriptionroomtype','rooms.room_type_id','extras.descriptionextras','bookings.booking_date','rooms.room_id','customers.first_name','customers.last_name','customers.email','customers.customers_id','extras.id','bookings.check_in','bookings.check_out','bookings.Amount')
        ->get();

        $data3 = DB::table('room_types')->get();
        $roomno = 0;
        foreach($data1 as $dat)
        {
        if($room == $dat->room_type_id)
        {
            $roomno = $roomno + 1;
        }
    }

    foreach($data2 as $datar)
    {
        if($room == $datar->room_type_id)
        {
            $roomno = $roomno - 1;
        }
    }
        return view('indexc',['data2'=>$data2,'data1'=>$data1,'data3'=>$data3]);
    }

    public function indexch(Request $request)
    {
        $checkin_date = $request->input('checkin_date');
        $checkout_date = $request->input('checkout_date'); 
        $room = $request->input('room');
        $data3 = DB::table('room_types')->get();
        $data1  = DB::table('rooms')->where('room_type_id',$room)->get();
     
        $data2 = DB::table('bookings') ->whereNotBetween('check_out', [$checkin_date, $checkout_date])->whereNotBetween('check_in', [$checkin_date, $checkout_date])->get();
        return view('indexc',['data2'=>$data2,'data1'=>$data1,'data3'=>$data3]);  
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
