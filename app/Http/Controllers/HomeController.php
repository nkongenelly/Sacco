<?php

namespace App\Http\Controllers;
use App\UserRole;
use App\User;
use Auth;
use Session;

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
            // return view('layouts.master');
             // User role
        $role = Auth::user()->role; 
    
        // Check user role
        switch ($role) {
            case 'admin':
                    return view('layouts.master');
                break;
            case 'official':
                    return view('layouts.official');
                break; 
            default:
                    return redirect('/login'); 
                break;
        }
    }
    
}
