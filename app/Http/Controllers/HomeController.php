<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        // $names=['id'=>5,'name'=>'basil']; // this id from data
        // return view('home',['names'=> $names]);
       
       // $id = Auth::id(); to get currently logined person user id (use Illuminate\Support\Facades\Auth;)
       //     echo $id;
       //$events = event::all();
       //return view('admin.event',['articles'=>$events]);
       return view('home');

       
    }
}
