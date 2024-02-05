<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    public function login(Request $request) {
        return view('auth.admin-login');
    }

    public function saveLogin(LoginRequest $request) {
        $data = $request->validated();
        
        if(Auth::attempt(array_merge($data, ['status' => 'active']))) { 
            return redirect()->route('admin.dashboard');
        } 

        return back()->with('fail', 'Invalid Credentials');
    }

    public function logout() {
        Auth::logout();
        
        return redirect()->route('admin.login');
    }
}
