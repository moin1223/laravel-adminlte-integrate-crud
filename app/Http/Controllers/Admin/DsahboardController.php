<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DsahboardController extends Controller
{
   
    function index()
    {
        if(Auth::check())
        {
            return view('admin.dashboard');
        }

        return redirect('login')->with('success', 'you are not allowed to access');
    }
}
