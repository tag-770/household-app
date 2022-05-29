<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <header>
    <!-- <nav class="my-navbar">
      <a class="my-navbar-brand" href="/">ToDo App</a>
    </nav> -->
  </header>
  <main>
    <div class="container">
      <div class="row">
        <div class="col col-md-offset-3 col-md-6">
          <nav class="panel panel-default">
            <div class="panel-heading">家計簿登録</div>
            <div class="panel-body">
              @if($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach($errors->all() as $message)
                      <li>{{ $message }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group">
                  <label for="name">名前</label>
                  <input type="text" class="form-control" name="name" id="name"  />
                  <label for="amountofmoney">金額</label>
                  <input type="number" class="form-control" name="amountofmoney" id="amountofmoney" />
                  <label for="memo">メモ</label>
                  <input type="memo" class="form-control" name="memo" id="memo" />
                </div>
                <div class="text-right">
                  <button type="submit" class="btn btn-primary">送信</button> 
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </main>
</body>
</html>