<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function showRegisterForm(){
        return view('auth.register'); 
    }

    public function register(Request $request){
        // dd($request->all());
        $credentials = $request->validate([
            'username' => 'required|unique:users',
            'password' => 'required|min:6|confirmed',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // dd($credentials);
    
        $password = bcrypt($credentials['password']); 
    
        $imagePath = null;

        if ($request->hasFile('img')) {
            $imageName = time() . '.' . $request->img->extension();
            $request->img->storeAs('public/profile_images', $imageName);
            $imagePath = 'profile_images/' . $imageName;
        }
    
        $user = User::create([
            'name' => $credentials['username'],
            'username' => $credentials['username'],
            'password' => $password,
            'img' => $imagePath,
        ]);
    
        Auth::login($user);
    
        return "Auth";
    }
    
    



    public function showLoginForm(){
        return view('auth.login'); 
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {  
            // return redirect()->route('home'); 
            return "Auth";
        }

        // return back()->withErrors(['email' => 'Wrong email or password.']); 
        return "NOT Auth";
    }

    public function logout(){
        Auth::logout();
        return redirect('/login'); 
    }

}
