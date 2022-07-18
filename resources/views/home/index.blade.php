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
        <th>
            <th>ID</th>
            <th>タイトル</th>
            <th>金額</th>
            <th>メモ</th>
        </th>
        @foreach($accounts as $account)
            <td>
                <td>{{ $account->user_id }}</td>
                <td>{{ $account->title }}</td>
                <td>{{ $account->amount }}</td>
                <td>{{ $account->memo }}</td>
            </td>
        @endforeach
    </table>
</body>
</html>