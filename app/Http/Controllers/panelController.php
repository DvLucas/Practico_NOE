<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class panelController extends Controller
{

    public function log(){
        if (  auth()->user() ) {
          return view('dashboard.dashboard');
        } 
        else 
        {
            return view('auth.login');
        }
    }
}

