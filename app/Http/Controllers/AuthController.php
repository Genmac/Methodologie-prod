<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{
    //
    public function afficherLogin(){
        return view('auth.connexion');
    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication successful
            $request->session()->regenerate();
            return redirect()->intended(route('professeurs.index'));
        } else {
            // Authentication failed

            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }

    public function afficherRegister(){
        return view('auth.inscription');
    }

    public function register(Request $request){
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        //Log::info("Nom: $data[name], Email: $data[email], Password: $data[password]");
        Auth::login($user);
        return redirect()->route('professeurs.index');
    }
}
