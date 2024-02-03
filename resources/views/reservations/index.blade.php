@extends('layouts.app')
@section('title', 'Home')

@section('content')
@include('components.header')
<div class="container d-flex justify-content-center mt-5">
  <div class="w-75 mt-5">
    <a href="{{route('restaurants.index')}}">ホーム</a> > 予約一覧
    <hr>
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
    <hr>
  </div>
</div>