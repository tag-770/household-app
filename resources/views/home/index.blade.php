<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>家計簿アプリ</h1>
    <a href="{{ route('logout') }}">ログアウト</a>
    <a href="{{ route('accountcreate') }}">家計簿登録</a>
    <table>
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>金額</th>
            <th>メモ</th>
        </tr>
        @foreach($accounts as $account)
            <tr>
                <th>{{$account->user_id}}</th>
                <th>{{$account->title}}</th>
                <th>{{$account->amount}}</th>
                <th>{{$account->memo}}</th>
            </tr>
        @endforeach
    </table>
   
</body>
</html>