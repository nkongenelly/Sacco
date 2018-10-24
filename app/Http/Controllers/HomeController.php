<?php

namespace App\Http\Controllers;

use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $roles =  Auth::user()->roles()->get();
       
    //    dd($roles);
        
    //     switch (Auth::user()->roles()->role_name) {
    //         case '1':
    //             return View('layouts.navbar');
    //             break;

    //         case '2':
    //             return View('layouts.navbar');
    //             break;

    //             default:
    //              return View('layouts.master');
    //             break;
        
    // }
    return view('layouts.master');
}
}
