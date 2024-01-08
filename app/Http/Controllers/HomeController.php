<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\Vue;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except('showApp');
    }
    // public function index()
    // {
    //     if (Auth::id()) {

    //         $userType = Auth()->user()->userType;

    //         if ($userType === 'admin') {
    //             return view('Admin/adminHome');
    //         }
    //         if($userType ==='user') {
    //             return view('layouts/Home');

    //         } 
    //     }
    // }


    // public function show()
    // {
    //    return  view('layouts/Home');
    // }

//minhas cenas!!!

        public function index()  {
            return route('layout.home');
        }





    public function showApp() {
        return view('app');
    }


}
