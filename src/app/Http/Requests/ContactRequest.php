<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function prepareForValidation()
    {
        $tell = $this->tel_first . $this->tel_middle . $this->tel_last;

        $this->merge([
            "tell" => $tell
        ]);
    }

    public function rules()
    {
        return [
            "first_name" => "required|max:255",
            "last_name" => "required|max:255",
            "gender" => "required",
            "email" => "required|max:255|email",
            "tell" => "required",
            "address" => "required|max:255",
            "content" => "required|max:255",
            "detail" => "required|max:120",
        ];
    }

    public function messages()
    {
        return [
            "first_name.required" => "名を入力してください",
            "last_name.required" => "性を入力してください",
            "gender.required" => "性別を入力してください",
            "email.required" => "メールアドレスを入力してください",
            "email.email" => "メールアドレスは「ユーザー@ドメイン」形式で入力してください",
            "tell.required" => "電話番号を入力してください",
            "address.required" => "住所を入力してください",
            "content.required" => "お問い合わせの種類を入力してください",
            "detail.required" => "お問い合わせ内容を入力してください",
            "detail.max" => "お問い合わせ内容は120文字以内で入力してください",
        ];
    }
}
