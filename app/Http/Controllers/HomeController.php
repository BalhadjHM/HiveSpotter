<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //display the home page
    public function home(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('welcome');
    }

    //display the signup page
    public function signup(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('signup');
    }

    //store the user data
    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        //validate the user data
        request()->validate([
            'name' => ['required', 'string', 'min:5', 'max:50'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'max:20']
        ], [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 5 characters',
            'name.max' => 'Name must be at most 50 characters',
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'email.unique' => 'Email is already taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
            'password.max' => 'Password must be at most 20 characters'
        ]);

        //get the user data
        $name = request('name');
        $email = request('email');
        $password = request('password');

        //store the user data
        User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password)
        ]);

        //redirect to the home page
        return redirect()->route('user.login')->with('success', 'You have successfully created an account')->withInput();
    }

    //display the login page
    public function login(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    // authenticate the user
    public function authenticate(Request $request){
        // validate the user data
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ], [
            'email.required' => 'Email is required',
            'email.email' => 'Email is invalid',
            'password.required' => 'Password is required'
        ]);

        // get the user data
        $email = request('email');
        $password = request('password');

        // authenticate the user
        if(auth()->attempt(['email' => $email, 'password' => $password])){
            // Authentication passed, regenerate session
            $request->session()->regenerate();
            // Redirect to the home page with a success message
            return redirect()->route('home')->with('success', 'You are logged in');
        }else{
            // redirect to the login page
            return redirect()->route('user.login')->withErrors(['email' => 'Invalid email or password'])->withInput();
        }
    }

}
