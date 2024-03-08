<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Contact-form-exam</title>
</head>

<body>

    <header>
        <div class="header-ttl">
            <h2>FashonablyLate</h2>
        </div>
        <div class="header-btn">
            <a href="/register">register</a>
        </div>
    </header>



    <main>
        <div class="login-form-content">
            <div class="login-form-heading">
                <h2>Login</h2>
            </div>


            <form class="login-form" action="/login" method="post">
                @csrf
                <div class="login-form-item-content">
                    <div class="login-form-item">
                        <div class="login-form-item-label">
                            <span>メールアドレス</span>
                        </div>
                        <input type="text" name="email" value="{{old('email')}}" placeholder="例:test@example.com">
                    </div>
                    <div class="login-form-error">
                        @error("email")
                        {{$message}}
                        @enderror
                    </div>
                </div>


                <div class="login-form-item-content">
                    <div class="login-form-item">
                        <div class="login-form-item-label">
                            <span>パスワード</span>
                        </div>
                        <input type="text" name="password" placeholder="例:coachtech1106">
                    </div>
                    <div class="login-form-error">
                        @error("password")
                        {{$message}}
                        @enderror
                    </div>
                </div>

                <div class="login-form-btn">
                    <button class="login-btn" type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </main>

</body>

</html>