@extends('layouts.app')
@section('title', '家計簿アプリ')
@section('content')
    @if (session('success_account_register'))
    <div class="text-center">
        <p class="text-green-500">{{ session('success_account_register') }}</p>
    </div>
    @endif
    @if (session('success_login'))
    <div class="text-center">
        <p class="text-green-500">{{ session('success_login') }}</p>
    </div>
    @endif
    @if (session('success_register'))
    <div class="text-center">
        <p class="text-green-500">{{ session('success_register') }}</p>
    </div>
    @endif
    <!-- component -->
        <div class="container mx-auto px-4 sm:px-8">
            <div class="py-8">
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="shadow rounded-lg overflow-hidden  w-2/3  mx-auto">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">ID</th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">タイトル</th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">金額</th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">メモ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($accounts as $account)
                                <tr>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <div class="text-center">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $account->user_id }}</p>
                                        </div>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap text-center">{{ $account->title }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                        <p class="text-gray-900 whitespace-no-wrap text-center">{{ $account->amount }}</p>
                                    </td>
                                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                        <div class="items-center">
                                            <p class="text-gray-900 whitespace-no-wrap">{{ $account->memo }}</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection