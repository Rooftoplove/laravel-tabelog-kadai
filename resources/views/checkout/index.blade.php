@extends('layouts.app')
@section('title', 'Home')

@section('content')
@include('components.header')

<!DOCTYPE html>
<html lang="ja">

<body>
  <div>有料会員登録しますがよろしいですか</div>

  <form action="{{route('checkout.store')}}" method="POST">
    @csrf
    <button type="button" onclick="history.back()">戻る</button>
    <button type="submit" class="btn text-white w-100">支払いへ</button>
  </form>
</body>