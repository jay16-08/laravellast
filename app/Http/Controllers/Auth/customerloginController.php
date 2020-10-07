<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class customerloginController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('guest:customers');
    } */

    public function  registration(Request $request)
    {
         
        $this->validate($request, [
            'first_name' =>'required',
            'last_name' => 'required',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'cmpassword' => 'required|same:password',
            'phone_number' => 'required',  
        ]);


        $customers_id = $request->input('customers_id');
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $address = $request->input('address');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone_number = $request->input('phone_number');
        

        $data = array('customers_id'=>$customers_id,'first_name'=>$first_name,'last_name'=>$last_name,'address'=>$address,'email'=>$email,'password'=>$password,'phone_number'=>$phone_number);
        $customers = DB::table('customers')->get();
        
        foreach ($customers as $data1)
        {
            if($email == $data1->email)
            {
                return redirect('customer/login')->with('success', 'Customer  is already existing');  
            }
        }
        DB::table('customers')->insert($data);
        return redirect('customer/login')->with('success', 'Customer  is successfully Insert');
    }
    public function showLoginForm()
    {
        return view('auth.custome_login');
    }
    public function checklogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );
        
        /* if(Auth::attempt($user_data))
        {
            return redirect('/bookingc');
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        } */

        $email = $request->input('email');
        $password = $request->input('password');
       $name=$request->input('name');
       if($name == '0')
       {
            $customers = DB::table('customers')->get();
        
            foreach ($customers as $data1)
          {
            if($email == $data1->email)
            {
                if($password == $data1->password)
                {
                    $email = $data1->first_name;
                    $request->session()->put('email',$email);
                    $request->session()->get('email');
                   
                    return redirect('/bookingc');
                }
                else
                {
                    return back()->with('error','Wrong Login Details Password');  
                }
            }
         }
       }
       else if($name == '1')
       {
       
        if(Auth::attempt($user_data))
        {
            return redirect('/admin');
        }
        else
        {
            return back()->with('error','Wrong Login Details');
        } 
       }
        return back()->with('error','Wrong Login Details');
    }
    public function successlogin()
    {
        return view('bookingc');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('customer_login');
    }
    public function login()
    {
        return true;
    }
}
