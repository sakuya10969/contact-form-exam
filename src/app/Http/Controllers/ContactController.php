<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function login()
    {
        return view("login");
    }

    public function thanks()
    {
        return view("thanks");
    }

    public function contact()
    {
        return view("contact");
    }
}
