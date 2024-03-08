<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "email" => "required|email|max:255",
            "password" => "required|max:255",
        ];
    }

    public function messages()
    {
        return [
            "email.required" => "メールアドレスを入力してください",
            "email.email" => "メールアドレスは「ユーザー名@ドメイン」形式で入力してください",
            "password.required" => "パスワードを入力してください",
        ];
    }
}
