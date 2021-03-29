<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
{
    public function signupView()
    {
        return view('signUp');
    }
    public function signupSubmit(Request $request)
    {
        // return $request->all();
        $validatedDate = $request->validate([
            'email' => 'required',
            'username' => 'required',
            'phone' => 'required|min:9|max:10',
        ]);
        $email = $request->input('email');
        return $email;
    }
}
