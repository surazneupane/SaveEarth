<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {
        if ($request->isMethod("POST")) {
            $loginCredentials = $request->except("_token");
            return $this->loginProcess($loginCredentials);
        }

        $data['title'] = 'Login';
        return view('admins.auth.login', compact('data'));
    }

    private function loginProcess($loginCredentials)
    {
        if (Auth::check() || Auth::attempt($loginCredentials)) {
            return redirect()->route('dashboard');
        }
        return redirect()->back()->with('error', 'Please check your email and password!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
