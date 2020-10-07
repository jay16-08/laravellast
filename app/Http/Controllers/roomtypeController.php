<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class roomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room_types = DB::table('room_types')->get();
        return view('room_types',['room_types'=>$room_types]);
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
        $room_type_id = $request->input('room_type_id');
        $descriptionroomtype = $request->input('descriptionroomtype');
        $amountroomtype = $request->input('amountroomtype');

        $data = array('room_type_id'=>$room_type_id,'descriptionroomtype'=>$descriptionroomtype,'amountroomtype'=>$amountroomtype);

        DB::table('room_types')->insert($data);
        return redirect('room_types')->with('success', 'Data is successfully Insert');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('room_types')->select('room_type_id','descriptionroomtype','amountroomtype')->where('room_type_id',$id)->get();
        return view('roomtypes_view',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $data = DB::table('room_types')->select('room_type_id','descriptionroomtype','amountroomtype')->where('room_type_id',$id)->get();
        return view('roomtype_edit',['data'=>$data]);
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
        $room_type_id = $request->input('room_type_id');
        $descriptionroomtype = $request->input('descriptionroomtype');
        $amountroomtype = $request->input('amountroomtype');
         DB::table('room_types')->where('room_type_id',$room_type_id)->update(['descriptionroomtype' =>$descriptionroomtype,'amountroomtype' => $amountroomtype]);
         return redirect('room_types')->with('success', 'Data is successfully Update');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('room_types')->where('room_type_id',$id)->delete();
      
        return redirect('room_types')->with('success', 'Data is successfully deleted');
    }
}
