<?php

namespace App\Http\Controllers;

use App\Models\chef;
use App\Models\client;
use App\Models\image;
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
            'image' => 'required|image',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $this->storeImage($request->file('image')); // Corrected
            Image::create([
                'url' => $imagePath,
                'imageable_id' => $user->id,
                'imageable_type' => User::class,
            ]);
        }

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

    private function storeImage($file)
    {
        // Check if $file exists and is a valid file object
        if ($file && !$file->getError()) {
            // Generate a unique filename for the image
            $filename = uniqid() . '_' . $file->getClientOriginalName();

            // Store the image in the 'public/images' directory
            $file->storeAs('public/images', $filename);

            // Return the path to store in the database
            return 'images/' . $filename;
        } else {
            // Handle file upload error
            // Log the error, display a message, etc.
            return null;
        }
    }



    public function signOut()
    {
        Auth::logout();

        return redirect("/");
    }





    public function updateProfile(Request $request)
    {
        $user = Auth::user();

      $dd =  $request->validate([
            'name' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'city' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:255',
            'age' => 'nullable|integer',
            'years_of_experience' => 'nullable|integer',


            
        ]);
        User::create($dd);

        if ($request->hasFile('image')) {
            $imagePath = $this->storeImage($request->file('image')); // Corrected
            Image::create([
                'url' => $imagePath,
                'imageable_id' => $user->id,
                'imageable_type' => User::class,
            ]);
        }

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }



    private function profileCompleteness(User $user)
    {
        $totalFields = 0;
        $filledFields = 0;

        // Iterate over each attribute in the user model
        foreach ($user->getAttributes() as $key => $value) {
            // Increment the total fields count
            $totalFields++;

            // Check if the field is filled (not null and not empty)
            if (!is_null($value) && $value !== '') {
                $filledFields++;
            }
        }

        // Calculate the completeness percentage
        return ($filledFields / $totalFields) * 100;
    }
}
