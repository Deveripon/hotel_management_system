<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendPageController extends Controller
{
   
    public function showLoginPage()
    {
       return view('backend.pages.index');
    }
    
    public function showDashboardPage()
    {
       return view('backend.pages.dashboard');
    }
}