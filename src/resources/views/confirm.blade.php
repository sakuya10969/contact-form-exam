<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/confirm.css')}}">
    <title>Contact-form-exam</title>
</head>

<body>

    <header>
        <div class="header-ttl">
            <h2>FashonablyLate</h2>
        </div>
    </header>

    <main>
        <div class="confirm-form-content">
            <div class="confirm-form-heading">
                <h2>Confirm</h2>
            </div>

            <table>
                <tr>
                    <th>お名前</th>
                    <td>sakuya</td>
                </tr>

                <tr>
                    <th>性別</th>
                    <td>male</td>
                </tr>

                <tr>
                    <th>メールアドレス</th>
                    <td>sakuya@lfc.com</td>
                </tr>

                <tr>
                    <th>電話番号</th>
                    <td>000</td>
                </tr>

                <tr>
                    <th>住所</th>
                    <td>Tokyo</td>
                </tr>

                <tr>
                    <th>建物名</th>
                    <td>Tokyo T</td>
                </tr>

                <tr>
                    <th>お問い合わせの種類</th>
                    <td>a</td>
                </tr>

                <tr>
                    <th>お問い合わせ内容</th>
                    <td>text</td>
                </tr>
            </table>

            <div class="confirm-btn">
                <form class="confirm-submit-btn" action="/thanks" method="post">
                    @csrf
                    <button type="submit">送信</button>
                </form>
                <div class="confirm-correction-link">
                    <a href="/contact">修正</a>
                </div>
            </div>
        </div>
    </main>
</body>