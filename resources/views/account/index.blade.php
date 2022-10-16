@extends('layouts.app')
@section('title', '家計簿登録 | 家計簿アプリ')
@section('content')
    @if($errors->any())
      <ul>
        @foreach($errors->all() as $message)
          <li>{{ $message }}</li>
        @endforeach
      </ul>
    @endif
    <form action="{{ route('accountcreate') }}" method="post">
      @csrf
      <body class="bg-gray-10 ">
        <div class="flex justify-center h-screen w-screen items-center">
            <div class="w-full md:w-1/2 flex flex-col items-center " >
                <h1 class="text-center text-2xl font-bold text-gray-600 mb-6">家計簿登録</h1>
                <div class="w-3/4 mb-6">
                    <label for="title">名前</label>
                        <input type="text" name="title" id="title" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500" placeholder="○○費">
                </div>
                <div class="w-3/4 mb-6">
                    <label for="amount">金額</label>
                        <input type="text" name="amount" id="amount" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 " placeholder="1000">
                </div>
                <div class="w-3/4 mb-6">
                    <label for="memo">メモ</label>
                        <input type="text" name="memo" id="memo" class="w-full py-4 px-8 bg-slate-200 placeholder:font-semibold rounded hover:ring-1 outline-blue-500 ">
                </div>
                <!-- button -->
                <div class="w-3/4 mt-4">
                    <button type="submit" class="py-4 bg-blue-400 w-full rounded text-blue-50 font-bold hover:opacity-75"> 送信</button>
                </div>
            </div>
        </div>
       </body>
    </form>
@endsection