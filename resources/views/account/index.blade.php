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
      <label for="title">名前</label>
        <input type="text" class="form-control" name="title" id="title"  />
        <label for="amount">金額</label>
        <input type="text" class="form-control" name="amount" id="amount" />
        <label for="memo">メモ</label>
        <input type="text" class="form-control" name="memo" id="memo" />
        <button type="submit" class="btn btn-primary">送信</button> 
    </form>
@endsection