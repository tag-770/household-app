<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン | 家計簿アプリ</title>
</head>
<body>
  <header>
  </header>
  <main>
    @if($errors->any())
      <ul>
         @foreach($errors->all() as $message)
            <li>{{ $message }}</li>
         @endforeach
      </ul>
    @endif
    <form action="{{ route('login') }}" method="post">
       @csrf
         <label for="email">メールアドレス</label>
         <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}" />
         <label for="password">パスワード</label>
         <input type="password" class="form-control" name="password" id="password" />
         <button type="submit" class="btn btn-primary">送信</button> 
    </form>
  </main>
</body>
</html>