<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>家計簿アプリへようこそ</title>
</head>
<body>
    @if (session('success_logout'))
        <div class="text-center pt-5">
            <p class="text-green-500">{{ session('success_logout') }}</p>
        </div>
    @endif
    <nav class="w-full pt-2 pb-10">
        <div class="justify-between  max-w-xs mx-auto pt-10">
            <h1 class="flex items-center text-neutral-900 text-3xl font-bold mx-auto">家計簿アプリです</h1>
                <div class="hidden -mx-4 lg:flex lg:items-center pt-5">
                    <a href="{{ route('login') }}" class="block mx-4 mt-2 text-lg text-neutral-900 hover:opacity-75 capitalize  lg:mt-0">ログイン</a>
                    <a href="{{ route('register') }}" class="block mx-4 mt-2 text-lg text-neutral-900 hover:opacity-75  capitalize lg:mt-0">会員登録</a>
                </div>
        </div>
    </nav>
</body>
</html>