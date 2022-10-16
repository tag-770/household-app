<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>新規ユーザー登録 | 家計簿アプリ</title>
</head>
<body>
    <header>
    </header>
    <main>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $message)
                    <li>{{ $message }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('register') }}" method="post" class="">
        @csrf
        <div class="bg-gray-10 ">
            <div class="flex justify-center h-screen w-screen items-center">
                <div class="w-full md:w-1/2 flex flex-col items-center " >
                    <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">新規ユーザー登録</h1>
                    <div class="w-3/4 mb-6">
                        <label for="username">ユーザー名</label>
                            <input type="text" name="username" id="username" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500">
                    </div>
                    <div class="w-3/4 mb-6">
                        <label for="amount">メールアドレス</label>
                            <input type="email" name="email" id="email" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 ">
                    </div>
                    <div class="w-3/4 mb-6">
                        <label for="memo">パスワード</label>
                            <input type="password" name="password" id="password" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 ">
                    </div>
                    <div class="w-3/4 mb-6">
                        <label for="memo">確認用パスワード</label>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 ">
                    </div>
                    <!-- button -->
                    <div class="w-3/4 mt-4">
                        <button type="submit" class="py-4 bg-blue-400 w-full rounded text-blue-50 font-bold hover:opacity-75"> 送信</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
  </main>
</body>
</html>