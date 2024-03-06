<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\User;

class ContactController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function createUser(ContactRequest $request)
    {
        $register = $request->only(["name", "email", "password"]);
        User::create($register);
        return redirect("/login");

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

    public function confirm()
    {
        return view("confirm");
    }
}
