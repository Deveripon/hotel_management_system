<?php

namespace App\Http\Controllers\admin;

use Dotenv\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;

class AdminAuthController extends Controller
{
    //

    public function Login(Request $request)
    {
        $this->Validate($request, [
            'userinfo' => 'required',
            'pass' => 'required',
        ]);

       if(Auth::guard('admin')->attempt(['username' => $request-> userinfo, 'password' => $request->pass])){
            return redirect() -> route('dashboard.page')-> with('success','Login successful');
        }
        return redirect() -> route('login.page') -> with('danger',' Wrong Username or Password!');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect() -> route('login.page');
    }
}