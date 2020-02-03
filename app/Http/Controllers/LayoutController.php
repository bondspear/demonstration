<?php

namespace App\Http\Controllers;

use App\User;
use Auth;

class LayoutController extends Controller
{
    public function show()
    {
        $user = User::orderby('id', 'desc')->get();
        return view('welcome', compact('user', 'token'));
    }
}
