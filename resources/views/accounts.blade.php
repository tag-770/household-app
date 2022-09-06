<!-- <title>自分の家計簿 | 家計簿アプリ</title> -->

@extends('layouts.app')
@section('content')
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
@endsection