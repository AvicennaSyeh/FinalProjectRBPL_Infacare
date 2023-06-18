<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class ProfilePasswordController extends Controller
{
    public function verifyPassword(Request $request)
    {
        $user = User::where('email', $request->input('email'))->first();

        if ($user && Hash::check($request->input('password'), $user->password)) {
            // Password is correct, inform the user
            return redirect()->route('success')->with('message', 'Password is correct!');
 // Redirect to a success page with a success message
        } else {
            // Password is incorrect
            return redirect()->back()->with('error', 'Incorrect password! Please try again.'); // Redirect back with an error message
        }

    }
}
