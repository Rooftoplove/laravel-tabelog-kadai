@extends('layouts.app')
@section('title', 'Home')

@section('content')
@include('components.header')
<div class="container d-flex justify-content-center mt-3">
  <h1>マイページ</h1>

  <p><a href="{{route('mypage.edit')}}">アカウント情報の編集</a></p>

  <p><a href="{{route('reservations.index')}}">予約確認</a></p>

  <p><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
  </p>
</div>

<hr>
</div>
</div>
@endsection