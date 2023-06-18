<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function index()
    {
        return view('userprofile'); // Assuming 'userprofile' is the name of your userprofile view file (userprofile.blade.php)
    }
}
