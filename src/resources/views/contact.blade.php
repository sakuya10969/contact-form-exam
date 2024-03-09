<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <title>Contact-form-exam</title>
</head>

<body>

    <header>
        <div class="header-ttl">
            <h2>FashonablyLate</h2>
        </div>
    </header>



    <main>
        <div class="contact-form-content">
            <div class="contact-form-heading">
                <h2>Contact</h2>
            </div>

            <form class="contact-form" action="/" method="post">
                @csrf
                <table>
                    <tr>
                        <th>お名前<span class="rice">※</span></th>
                        <td>
                            <div class="contact-form-name-input">
                                <input type="text" name="last_name" value="{{old('last_name')}}" placeholder="例:山田">
                                <input type="text" name="first_name" value="{{old('first_name')}}" placeholder="例:太郎">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="contact-form-error">
                            @error("last_name")
                            {{$message}}
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td class="contact-form-error">
                            @error("first_name")
                            {{$message}}
                            @enderror
                        </td>
                    </tr>



                    <tr>
                        <th>性別<span class="rice">※</span></th>
                        <td>
                            <div class="contact-form-gender-input">
                                <label><input type="radio" name="gender" value="1" checked>男性</label>
                                <label><input type="radio" name="gender" value="2">女性</label>
                                <label><input type="radio" name="gender" value="3">その他</label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="contact-form-error">
                            @error("gender")
                            {{$message}}
                            @enderror
                        </td>
                    </tr>



                    <tr>
                        <th>メールアドレス<span class="rice">※</span></th>
                        <td>
                            <div class="contact-form-email-input">
                                <input type="email" name="email" value="{{old('email')}}" placeholder="例:test@example.com">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="contact-form-error">
                            @error("email")
                            {{$message}}
                            @enderror
                        </td>
                    </tr>



                    <tr>
                        <th>電話番号<span class="rice">※</span></th>
                        <td>
                            <div class="contact-form-tel-input">
                                <label>
                                    <input type="tel" name="tel_first" value="{{old('tel_first')}}" placeholder="080"><span class="hyphen">-</span>
                                    <input type="tel" name="tel_middle" value="{{old('tel_middle')}}" placeholder="1234"><span class="hyphen">-</span>
                                    <input type="tel" name="tel_last" value="{{old('tel_last')}}" placeholder="5678">
                                </label>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="contact-form-error">
                            @error("tell")
                            {{$message}}
                            @enderror
                        </td>
                    </tr>



                    <tr>
                        <th>住所<span class="rice">※</span></th>
                        <td>
                            <div class="contact-form-address-input">
                                <input type="text" name="address" value="{{old('address')}}" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="contact-form-error">
                            @error("address")
                            {{$message}}
                            @enderror
                        </td>
                    </tr>



                    <tr>
                        <th>建物名</th>
                        <td>
                            <div class="contact-form-building-input">
                                <input type="text" name="building" value="{{old('building')}}" placeholder="例:千駄ヶ谷マンション101">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="contact-form-error">
                            @error("building")
                            {{$message}}
                            @enderror
                        </td>
                    </tr>



                    <tr>
                        <th>お酔い合わせの種類<span class="rice">※</span></th>
                        <td>
                            <div class="contact-form-content-input">
                                <select name="content">
                                    <option value="">選択してください</option>
                                    <option value="商品のお届けについて">商品のお届けについて</option>
                                    <option value="商品の交換について">商品の交換について</option>
                                    <option value="商品トラブル">商品トラブル</option>
                                    <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                                    <option value="その他">その他</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="contact-form-error">
                            @error("content")
                            {{$message}}
                            @enderror
                        </td>
                    </tr>



                    <tr>
                        <th>お問い合わせ内容<span class="rice">※</span></th>
                        <td>
                            <div class="contact-form-detail-input">
                                <textarea name="detail" placeholder="お問い合わせ内容をご記載ください">{{old('detail')}}</textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="contact-form-error">
                            @error("detail")
                            {{$message}}
                            @enderror
                        </td>
                    </tr>
                </table>

                <div class="contact-form-btn">
                    <button class="confirm-btn" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>