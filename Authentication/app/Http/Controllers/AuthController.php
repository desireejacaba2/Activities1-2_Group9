<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Returns the registration view
    public function register()
    {
        return view('register');
    }
 
    // Handles registration form submission
    public function registerPost(Request $request)
    {
        // Create a new User instance
        $user = new User();
 
        // Assign submitted data to user properties
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        // Save the user to the database
        $user->save();
 
        // Redirect back with success message
        return back()->with('success', 'Register successfully');
    }

    // Returns the login view
    public function login()
    {
        return view('login');
    }
 
    // Handles login form submission
    public function loginPost(Request $request)
    {
        // Credentials array from submitted form data
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        // Attempt to authenticate user
        if (Auth::attempt($credentials)) {
            // Redirect to home on successful login
            return redirect('/home')->with('success', 'Login Success');
        }
 
        // Redirect back with error message if authentication fails
        return back()->with('error', 'Error Email or Password');
    }
 
    // Logs out the authenticated user
    public function logout()
    {
        // Logout the user
        Auth::logout();
 
        // Redirect to login page after logout
        return redirect()->route('login');
    }
}