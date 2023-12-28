@extends('layouts.app')
@section('title', 'Home')

@section('content')
@include('components.header')
<a href="{{route('home')}}">ホーム</a> > 予約一覧
<table>
  <tr>
    <th>予約時間</th>
    <th>予約人数</th>
  </tr>
  @foreach($reservations as $reservation)
  <tr>
    <td>{{ $reservation->time }}</td>
    <td>{{ $reservation->people }}</td>
  </tr>
  @endforeach
</table>