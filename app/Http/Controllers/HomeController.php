<?php

namespace App\Http\Controllers;

use App\Models\Receitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Ui\Presets\Vue;

class HomeController extends Controller
{


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


    public function index()
    {


        if (Auth::id()) {

            $userType = Auth()->user()->userType;

            if ($userType === 'administrador') {
                return view('admin.adminHome');
            }
            if ($userType === 'usuario') {
                return view('layouts.home');
            }
        }
        return view('app');
            if ($userType === 'admin') {
                return view('admin.adminHome');
            }
            if ($userType ==='user') {
                $receitas = Receitas::all();

                return view('layouts.home')->with('receitas',$receitas );

            } 
        }

    }

    public function showApp()
    {

        if (Auth::id()) {
            return view('layouts.home');
        }
        return view('app');
        if (Auth::id()) {
            $receitas = Receitas::all();
            
            return view('layouts.home')->with('receitas',$receitas );
        }
       return  view('app');
    }
}
