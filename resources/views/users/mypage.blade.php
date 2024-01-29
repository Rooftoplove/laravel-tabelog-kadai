@extends('layouts.app')
@section('title', 'Home')

@section('content')
@include('components.header')
<div>
  <h1>マイページ</h1>

  <p><a href="{{route('mypage.edit')}}">アカウント情報の編集</a></p>

  <p><a href="{{route('reservations.index')}}">予約確認</a></p>
</div>