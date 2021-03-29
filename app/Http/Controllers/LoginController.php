<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginSubmit(Request $request)
    {
        // return $request->all();
        $validatedData = $request->validate([
            'email' => 'required',
            'password' => 'required|min:4|max:8',
        ]);
        $email = $request->input('email');
        return $email;
    }
}
