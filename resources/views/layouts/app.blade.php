<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>家計簿アプリ</title>
</head>
<body>
    <header>
        <h1><a href="{{ route('home') }}">家計簿アプリ</a></h1>
        <a href="{{ route('logout') }}">ログアウト</a>
        <a href="{{ route('accountcreate') }}">家計簿登録</a>
        <a href="{{ route('accounts') }}">自分の家計簿</a>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; 2022 家計簿アプリ
    </footer>
</body>
</html>