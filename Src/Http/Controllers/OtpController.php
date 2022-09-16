<?php

namespace App\Packages\Otp\Src\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class OtpController extends Controller
{

     public function register()
    {
       return view('otp::register');
    }
    public function registerpost(Request $request)
    {
        // dd($request->all());
       $x=DB::table('users')->insert([
            $request->all()
       ]);

       return view('otp::otp',compact('phone'));
    }
    public function login()
    {
       return view('otp::login');

    }
    public function loginpost(Request $request)
    {
        // dd($request->all());
        $phone=$request->phone;
       $user=DB::table('users')->where('phone',$request->phone);
        if($user=null){
            dd('eror for login');
        }else{
            // Auth()->loginUsingId($user->id);

       return view('otp::otp',compact('phone'));

        }

    }
    public function otp()
    {
        return view('otp::otp');

    }
    public function validate()
    {
        dd('validate');
    }
}
