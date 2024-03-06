<!DOCTYPE>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <title>Contact-form-exam</title>
</head>

<body>

    <header>
        <div class="header-ttl">
            <h2>FashonablyLate</h2>
        </div>
        <div class="header-btn">
            <a href="/login">login</a>
        </div>
    </header>

    <main>
        <div class="register-form-content">
            <div class="register-form-heading">
                <h2>Register</h2>
            </div>


            <form class="register-form" action="/login" method="post">
                @csrf
                <div class="register-form-item-content">
                    <div class="register-form-item">
                        <div class="register-form-item-label">
                            <span>お名前</span>
                        </div>
                        <input type="text" name="name" value="{{old('name')}}" placeholder="例:山田 太郎">
                    </div>
                    <div class="register-form-error">
                        @error("name")
                        {{message}}
                        @enderror
                    </div>
                </div>


                <div class="register-form-item-content">
                    <div class="register-form-item">
                        <div class="register-form-item-label">
                            <span>メールアドレス</span>
                        </div>
                        <input type="text" name="email" value="{{old('email')}}" placeholder="例:test@example.com">
                    </div>
                    <div class="register-form-error">
                        @error("email")
                        {{message}}
                        @enderror
                    </div>
                </div>


                <div class="register-form-item-content">
                    <div class="register-form-item">
                        <div class="register-form-item-label">
                            <span>パスワード</span>
                        </div>
                        <input type="text" name="password" value="{{old('password')}}" placeholder="例:coachtech1106">
                    </div>
                    <div class="register-form-error">
                        @error("password")
                        {{message}}
                        @enderror
                    </div>
                </div>

                <div class="register-form-btn">
                    <button class="register-btn" type="submit">登録</button>
                </div>
</form>
        </form>
    </main>

</body>

</html>