@extends('layouts.app')
@section('title', '自分の家計簿 詳細ページ | 家計簿アプリ')
@section('content')
<div>
    <form class="text-right" action="{{ route('account.destroy', ['id'=>$accounts->id]) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">削除</button>
    </form>
</div>
<table class="min-w-full leading-normal">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">タイトル</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">金額</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">メモ</th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">作成日時</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="text-gray-900 whitespace-no-wrap text-center">{{ $accounts->title }}</td>
            <td class="text-gray-900 whitespace-no-wrap text-center">{{ $accounts->amount }}</td>
            <td class="text-gray-900 whitespace-no-wrap text-center">{{ $accounts->memo }}</td>
            <td class="text-gray-900 whitespace-no-wrap text-center">{{ $accounts->created_at }}</td>
        </tr>
    </tbody>
</table>
@endsection


