<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class bookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookings = DB::table('bookings')->join('rooms','rooms.room_id','=','bookings.room_id')
        ->join('room_types','room_types.room_type_id','=','rooms.room_type_id')
        ->join('customers','customers.customers_id','=','bookings.customers_id')
        ->join('extras','extras.id','=','bookings.id')
        ->select('bookings.booking_id','room_types.descriptionroomtype','rooms.room_type_id','extras.descriptionextras','bookings.booking_date','rooms.room_id','customers.first_name','customers.last_name','customers.email','customers.customers_id','extras.id','bookings.check_in','bookings.check_out','bookings.Amount')
        ->get();
        return view('bookings',['bookings'=>$bookings]);
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
     
        $bookings = DB::table('bookings')->join('rooms','rooms.room_id','=','bookings.room_id')
        ->join('room_types','room_types.room_type_id','=','rooms.room_type_id')
        ->join('customers','customers.customers_id','=','bookings.customers_id')
        ->join('extras','extras.id','=','bookings.id')
        ->select('bookings.booking_id','room_types.descriptionroomtype','rooms.room_type_id','extras.descriptionextras','bookings.booking_date','rooms.room_id','customers.first_name','customers.last_name','customers.customers_id','extras.id','bookings.check_in','bookings.check_out','bookings.Amount')
        ->where('booking_id',$id)
        ->get();
        return view('booking_view',['bookings'=>$bookings]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $data = DB::table('bookings')->where('booking_id',$id)->delete();
      
        return redirect('bookings')->with('success', 'Data is successfully deleted');
    }
}
