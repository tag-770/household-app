@extends('layouts.app')
@section('content')
    @if (session('success_account_register'))
    <p style="color: green;">{{ session('success_account_register') }}</p>
    @endif
    @if (session('success_login'))
    <p style="color: green;">{{ session('success_login') }}</p>
    @endif
    @if (session('success_register'))
    <p style="color: green;">{{ session('success_register') }}</p>
    @endif
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
    @endsection