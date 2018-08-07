<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{
   public function showMain(){
       return view('main');
   }

    public function showContact(){
        return view('contact');
    }

    public function showDemo(){
        return view('demo');
    }


    public function showAboutus(){
        return view('aboutus');
    }

    public function showAdmin()
    {
        if(Auth::check())
            $admin_id = Auth::id();
        if (isset($admin_id) && $admin_id == 2)
            return view('admin');
        else
            return view('main');
    }
}
