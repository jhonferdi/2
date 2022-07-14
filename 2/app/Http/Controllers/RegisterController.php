<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            "title" => "Register",
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:64',
            'username' => ['required', 'min:4', 'max:24', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:6|max:32|'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']); 
        // $validatedData['password'] = Hash::make($validatedData['password']); pake-> use Illuminate\Support\Facades\hash;

        User::create($validatedData);

        $request->session()->flash('success', 'Registration Successfull!');

        return redirect('/login');
    }
}
