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
    </header>
    <main>
    <table>
        <tr>
            <th>タイトル</th>
            <th>金額</th>
            <th>メモ</th>
        </tr>
        @foreach($accounts as $account)
            <tr>
                <td>{{ $account->title }}</td>
                <td>{{ $account->amount }}</td>
                <td>{{ $account->memo }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>