<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Verified;


class CustomerController extends Controller
{
    public function account()
    {
          return view('frontend.account');
    }


    public function customer_login(Request $request)
    {
        //    return $request;
          if (Auth::attempt(['email' => $request->email, 'password' => $request->password,])) {
            return view('frontend.customer.dashboard');

            // return  "lala";

             }
             else {
        return back()->with('customer_failed', 'please sign in.this email is not available');
        return redirect('/customer/login');


             }

    }

     public function customer_register(Request $request)
    {
          $request->validate([
            '*'=> 'required',
          ]);
//  return  $request;
          User::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>bcrypt($request->password),
            'phn_number' => $request->phn_number,
            'role' => 'customer',
            'created_at' => Carbon::now(),
          ]);
          return back()->with('customer_success','your account created successfully now you have to signin');
          return redirect('/customer/login');


    }
}
