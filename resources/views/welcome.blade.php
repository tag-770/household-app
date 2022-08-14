<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>家計簿アプリへようこそ</title>
</head>
<body>
    <style>
        h1 {
            color: red;
        }
    </style>
    @if (session('success_logout'))
       <p style="color: green;">{{ session('success_logout') }}</p>
    @endif
    <h1>家計簿アプリです</h1>
    <a href="{{ route('login') }}">ログイン</a>
    <a href="{{ route('register') }}">会員登録</a>
</body>
</html>