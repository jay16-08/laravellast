<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class roomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $rooms = DB::table('rooms')->get();
        return view('rooms',['rooms'=>$rooms]); */  
        $rooms = DB::table('rooms')->join('room_types','room_types.room_type_id','=','rooms.room_type_id')
        ->select('rooms.room_id','room_types.amountroomtype','room_types.descriptionroomtype','rooms.max_occupancy','rooms.room_type_id')->get();
        return view('rooms',['rooms'=>$rooms]);
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
        $room_id = $request->input('room_id');
        $room_type_id = $request->input('room_type_id');
        $max_occupancy = $request->input('max_occupancy');

        $data = array('room_id'=>$room_id,'room_type_id'=>$room_type_id,'max_occupancy'=>$max_occupancy);

        DB::table('rooms')->insert($data);
        return redirect('rooms')->with('success', 'Data is successfully Insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rooms = DB::table('rooms')->join('room_types','room_types.room_type_id','=','rooms.room_type_id')
        ->select('rooms.room_id','room_types.amountroomtype','room_types.descriptionroomtype','rooms.max_occupancy','rooms.room_type_id')
        ->where('room_id',$id)
        ->get();
        return view('room_view',['rooms'=>$rooms]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* 
         $data = DB::table('rooms')->join('room_types','room_types.room_type_id','=','rooms.room_type_id')
        ->select('rooms.room_id','room_types.amountroomtype','room_types.descriptionroomtype','rooms.max_occupancy','rooms.room_type_id')->where('room_id',$id)->get();
        return view('room_edit',['data'=>$data]); */
        $data1 = DB::table('rooms')->where('room_id',$id)->get();
        $data2 = DB::table('room_types')->get();
        return view('room_edit',['data1'=>$data1,'data2'=>$data2]);
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
        $room_id = $request->input('room_id');
        $room_type_id = $request->input('room_type_id');
/*         $descriptionroomtype = $request->input('descriptionroomtype');
        $amountroomtype = $request->input('amountroomtype'); */
        $max_occupancy = $request->input('max_occupancy');
        
        DB::table('rooms')->where('room_id',$room_id)->update(['room_type_id' =>$room_type_id,'max_occupancy' => $max_occupancy]);
         return redirect('rooms')->with('success', 'Data is successfully Update');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('rooms')->where('room_id',$id)->delete();
      
        return redirect('rooms')->with('success', 'Data is successfully deleted');
    }
}
