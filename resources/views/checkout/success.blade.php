@extends('layouts.app')
@section('title', 'Home')

@section('content')
@include('components.header')

<!DOCTYPE html>
<html lang="ja">

<body>
  <div>有料会員ご登録ありがとうございます</div>

  <a href="{{route('mypage')}}">マイページへ</a>
</body>