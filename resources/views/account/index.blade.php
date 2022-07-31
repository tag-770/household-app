<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>家計簿登録</title>
</head>
<body>
  <header>
    <!-- <nav class="my-navbar">
      <a class="my-navbar-brand" href="/">ToDo App</a>
    </nav> -->
  </header>
  <main>
    @if($errors->any())
      <ul>
        @foreach($errors->all() as $message)
          <li>{{ $message }}</li>
        @endforeach
      </ul>
    @endif
    <form action="{{ route('accountcreate') }}" method="post">
      @csrf
      <label for="title">名前</label>
        <input type="text" class="form-control" name="title" id="title"  />
        <label for="amount">金額</label>
        <input type="text" class="form-control" name="amount" id="amount" />
        <label for="memo">メモ</label>
        <input type="text" class="form-control" name="memo" id="memo" />
        <button type="submit" class="btn btn-primary">送信</button> 
    </form>
  </main>
</body>
</html>