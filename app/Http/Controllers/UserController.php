<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function create()
    {
        return view('register');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    

    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => 'required|in:client,chef',
            'lastName' => 'required|string',
            'image' => 'required|image',

        ]);
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'lastName' =>$request->lastName,
            'image' =>$request->image,
        ]);
        if ($request->role == 'client') {
            $user->client()->create();
            Auth::login($user);
            return redirect('/client');
        } elseif ($request->role == 'chef') {
            Auth::login($user);
            $user->chef()->create();
            return redirect('/chef');
        }
    }
    public function signOut()
    {
        Auth::logout();

        return redirect("login");
    }
}
