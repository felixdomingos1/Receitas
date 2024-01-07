<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\Vue;

class HomeController extends Controller
{
    
    public function index()
    {
        if (Auth::id()) {

            $userType = Auth()->user()->userType;

            if ($userType === 'admin') {
                return view('Admin/adminHome');
            }
            elseif ($userType ==='user') {
                return view('layouts/Home');

            } else {
                return view('app');
            }
        }
        return view('app');

    }


    public function show()
    {
       return  view('app');
    }

    // public function store()
    // {
    //    return view('Auth/SignUp');
    // }


    // public function destroy()
    // {
    //     dd('Litar');
    // }
}
