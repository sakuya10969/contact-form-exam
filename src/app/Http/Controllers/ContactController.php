<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ContactController extends Controller
{
    public function register()
    {
        return view("auth.register");
    }   //ユーザー登録画面

    public function signUp(RegisterRequest $request)
    {
        $register = $request->only(["name", "email", "password"]);
        $register["password"] = Hash::make($register["password"]);
        User::create($register);

        return redirect("/login");
    }   //ユーザー登録機能



    public function login()
    {
        return view("auth.login");
    }   //ログイン画面

    public function toAdmin(LoginRequest $request)
    {
        redirect("/admin");
    }   //管理画面への遷移



    public function contact()
    {
        return view("contact");
    }   //問い合わせフォーム画面

    public function toConfirm(ContactRequest $request)
    {
        $contactItem = $request->only(["first_name", "last_name", "gender", "email", "tell", "address", "building", "content", "detail"]);

        $contact = new Contact();

        $contactItem["gender"] = $contact->genderToString($contactItem["gender"]);

        session()->put("contactItem", $contactItem);


        return redirect("/confirm");
    }   //問い合わせ内容確認画面への遷移



    public function confirm()
    {
        $contactItem = session("contactItem");

        return view("confirm", compact("contactItem"));
    }   //問い合わせ内容確認画面

    public function submit(Request $request)
    {
        $contactItem = session("contactItem");

        $contact = new Contact();
        $contactItem["gender"] = $contact->genderToInt($contactItem["gender"]);

        Contact::create($contactItem);

        session()->forget("contactItem");

        return redirect("/thanks");
    }   //問い合わせ内容保存、サンクス画面へ遷移



    public function admin()
    {
        $contactItems = Contact::with("category")->Paginate(7);
        return view("admin", compact("contactItems"));
    }   //管理画面



    public function thanks()
    {
        return view("thanks");
    }   //サンクス画面


    public function search(Request $request)
    {
        $keyword = $request->input("keyword");
        $gender = $request->input("gender");
        $content = $request->input("content");
        $date = $request->input("date");

        $query = Contact::with("category");

        if (!empty($keyword)) {
            $query->keywordSearch($keyword);
        }

        if (!empty($gender)) {
            $query->genderSearch($gender);
        }

        if (!empty($content)) {
            $query->whereHas("category", function ($query) use ($content) {
                $query->contentSearch($content);
            });
        }

        if (!empty($date)) {
            $query->dateSearch($date);
        }

        $searchResults = $query->paginate(7);

        return view("search", compact("searchResults"));
    }   //検索機能
}
