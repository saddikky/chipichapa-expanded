<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    function showRegistration() {
        return view('registration');
    }

    function submitRegistration(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|min:5|max:30',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = bcrypt($validated['password']);
        $user->isAdmin = 0;
        $user->save();

        return redirect()->route('login');
    }

    function showLogin() {
        return view('login');
    }

    function submitLogin(Request $request) {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();
    
            // Retrieve the authenticated user
            $user = Auth::user();
    
            // Redirect based on user role
            if ($user->isAdmin) {
                return redirect()->route('admin.appt.list');
            } else {
                return redirect()->route('about'); // or another route for regular users
            }
        } else {
            return redirect()->back()->with('failed', 'Incorrect credentials');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('landing');
    }
}
