<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <title>Contact-form-exam</title>
</head>



<body>

    <header>
        <div class="header-ttl">
            <h2>FashonablyLate</h2>
        </div>
        <div class="header-btn">
            <a href="/login">logout</a>
        </div>
    </header>



    <main>
        <div class="admin-form-content">
            <div class="admin-form-heading">
                <h2>Admin</h2>
            </div>

            <div class="search-form-container">
                <form class="search-form" action="/search" method="get">
                    <div class="search-area">
                        <input class="keyword-search-area" type="text" name="keyword" value="{{old('keyword')}}" placeholder="名前やメールアドレスを入力してください">
                    </div>
                    <div class="search-area">
                        <select class="gender-search-area" name="gender">
                            <option value="" selected>性別</option>
                            <option value="1">男性</option>
                            <option value="2">女性</option>
                            <option value="3">その他</option>
                        </select>
                    </div>

                    <div class="search-area">
                        <select class="content-search-area" name="content">
                            <option value="" selected>お問い合わせの種類</option>
                            <option value="1">商品のお届けについて</option>
                            <option value="2">商品の交換について</option>
                            <option value="3">商品トラブル</option>
                            <option value="4">ショップへのお問い合わせ</option>
                            <option value="5">その他</option>
                        </select>
                    </div>
                    <div class="search-area">
                        <input class="date-search-area" type="date" name="date">
                    </div>

                    <div class="search-area">
                        <button class="search-btn" type="submit">検索</button>
                    </div>

                </form>

                <form class="reset-btn" action="/reset">
                    <button type="submit">リセット</button>
                </form>
            </div>


            <div class="export-pagination">
                <button class="export-btn">エクスポート</button>
                <div class="pagination">
                    {{$searchResults->links()}}
                </div>
            </div>

            <table>
                <tr>
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
                @foreach($searchResults as $searchResult)
                <tr>
                    <td>{{$searchResult->last_name}} {{$searchResult->first_name}}</td>
                    <td>{{$searchResult->genderToString($searchResult["gender"])}}</td>
                    <td>{{$searchResult->email}}</td>
                    <td>{{$searchResult->category->content}}</td>
                    <td><button class="detail-btn">詳細</button></td>
                </tr>
                @endforeach
            </table>
    </main>

</body>

</html>