<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Todolist;
use App\Models\user;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\Auth;


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
    public function index()
     {
    //  echo auth()->user()->role;
    //  die();

        if (auth()->user()->role == 'customer'){
              return view('frontend.customer.dashboard');

        }else {

            // $get_todo = Todolist::all();
            return view('home');
        }

    }

     public function users()
    {

        return view('users' ,[
            'users'=>user::all()

        ]);
    }


}
