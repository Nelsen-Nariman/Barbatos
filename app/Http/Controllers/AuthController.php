<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function loginAction(Request $request)
    {

        $credentials = [
            'email' => $request->emailInput,
            'password' => $request->passwordInput
        ];

        // Authentication untuk ngecek email sama passwordnya ada ngga sama sudah sesuai belum sama di DB.
        // Authorization untuk ngebedain akses admin sama user, contohnya admin bisa CRUD, user gk bisa. 
        if(!Auth::attempt($credentials, true)){
            return redirect()->back()->withErrors([
                'email' => 'Invalid Credentials',
                'password' => 'Invalid Credentials'
            ]);
        }

        if($request->rememberInput !== null){
            Cookie::queue('CookieEmail', $request->emailInput, 120);
            Cookie::queue('CookiePassword', $request->passwordInput, 120);
        }

        return redirect('/');
    }

    public function logout(){
        Auth::logout();

        return redirect()->route('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerAction(Request $request){
        $newUser = $request->validate([
            'name' => ['required', 'min:5'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8', 'alpha_num', 'confirmed'],
            'gender' => ['required'],
            'date_of_birth' => ['required', 'before:today', 'after:' . date('1900-01-01')],
            'country' => ['required'],
        ]);

        $newUser['password'] = Hash::make($newUser['password']);

        User::create($newUser);
        return redirect()->route('auth.login')->with('registerSuccess', 'Registration succesful');
    }

    public function showProfile() {
        $user = auth()->user();

        $userData = [
            'name' => $user->name,
            'email' => $user->email,
            'gender' => $user->gender,
            'dob' => $user->date_of_birth,
            'country' => $user->country
        ];

        return view('auth.profile', $userData);
    }
    
}
