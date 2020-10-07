<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CrudsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      //  $users = DB::select('select * from extras');
        $users = DB::table('extras')->get();
        return view('test',['users'=>$users]);
         
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exteas_insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        $descriptionextras = $request->input('descriptionextras');
        $amountextras = $request->input('amountextras');

        $data = array('id'=>$id,'descriptionextras'=>$descriptionextras,'amountextras'=>$amountextras);

        DB::table('extras')->insert($data);
        return redirect('test')->with('success', 'Data is successfully Insert');
        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('extras')->select('id','descriptionextras','amountextras')->where('id',$id)->get();
        return view('exteas_view',['data'=>$data]);
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('extras')->select('id','descriptionextras','amountextras')->where('id',$id)->get();
        return view('exteas_edit',['data'=>$data]);
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
     
        $id = $request->input('id');
        $descriptionextras = $request->input('descriptionextras');
        $amountextras = $request->input('amountextras');
         DB::table('extras')->where('id',$id)->update(['descriptionextras' =>$descriptionextras,'amountextras' => $amountextras]);
         return redirect('test')->with('success', 'Data is successfully Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('extras')->where('id',$id)->delete();
      
        return redirect('test')->with('success', 'Data is successfully deleted');
    }
}
