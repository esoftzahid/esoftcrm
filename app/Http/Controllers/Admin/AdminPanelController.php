<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function index()
    {
        return view('Admin.signin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/admin-panel/dashboard');
        }

        // Authentication failed
        return back()->withErrors(['email' => 'Invalid login credentials'])->withInput();
    }
    public function signout()
    {
        Auth::logout();
        return redirect()->route('admin.panel');
    }
}
