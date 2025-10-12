<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnpundungController extends Controller
{
    public function login()
    {
        return view('annpundung.login');
    }

    public function register()
    {
        return view('annpundung.register');
    }

    public function dashboard()
    {
        return view('annpundung.dashboard');
    }

    public function pencegahan()
    {
        return view('annpundung.pencegahan');
    }
}
