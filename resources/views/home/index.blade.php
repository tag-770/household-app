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
    <a href="{{ route('accounts') }}">自分の家計簿</a>
    <table>
        <tr>
            <th>ID</th>
            <th>タイトル</th>
            <th>金額</th>
            <th>メモ</th>
        </tr>
        @foreach($accounts as $account)
            <tr>
                <td>{{ $account->user_id }}</td>
                <td>{{ $account->title }}</td>
                <td>{{ $account->amount }}</td>
                <td>{{ $account->memo }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>