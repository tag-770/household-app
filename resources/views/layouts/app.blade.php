<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>家計簿アプリ</title>
</head>
<body>
@include('layouts.header')
    <main>
        @yield('content')
    </main>
    <footer>
        &copy; 2022 家計簿アプリ
    </footer>
</body>
</html>