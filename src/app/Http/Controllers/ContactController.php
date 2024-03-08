<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Contact;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }

    public function signUp(RegisterRequest $request)
    {
        $register = $request->only(["name", "email", "password"]);
        User::create($register);

        return redirect("/login");
    }



    public function login()
    {
        return view("auth.login");
    }

    public function toAdmin()
    {
        return redirect("/admin");
    }



    public function contact()
    {
        return view("contact");
    }

    public function toConfirm(ContactRequest $request)
    {
        $contactItem = $request->only(["first_name", "last_name", "gender", "email", "tell", "address", "building", "content", "detail"]);

        $contactItem["content"] = Category::contentToString($contactItem["content"]);

        return redirect("/confirm");
    }



    public function confirm()
    {
        return view("confirm");
    }

    public function submit(ContactRequest $request)
    {
        $contactItem = $request->only(["first_name", "last_name", "gender", "email", "tell", "address", "building", "content", "detail"]);

        $contactItem["content"] = Category::contentToString($contactItem["content"]);

        Contact::create($contactItem);

        return redirect("/thanks");
    }



    public function admin()
    {
        $contactItems = Contact::with("category")->Paginate(7);
        return view("admin", compact("contactItems"));
    }



    public function thanks()
    {
        return view("thanks");
    }
}
