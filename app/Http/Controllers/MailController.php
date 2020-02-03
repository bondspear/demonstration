<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailToAdmin;
use App\User;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        return view('contact.contact');
    }

    public function sender(Request $request, User $user)
    {
        $admin = "bondspear1989@gmail.com";   
        Mail::to($admin)->send(new MailToAdmin($user));
        return redirect()->route('home');
    }
}
