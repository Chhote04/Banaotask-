<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('front.index');
    }

    public function dashboard()
    {
        if (Auth::check()) {
            $useremail = Auth::User()->email;
        }
        return view('front.dashboard');
    }
}
