@extends('layouts.app')
@section('title', 'Home')

@section('content')
@include('components.header')
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>レビュー</title>
</head>

<body>
  <h1>{{$restaurant->store_name}}のレビュー</h1>
  <form method=" POST" action="{{route('reviews.register')}}">
    @csrf
    <label for="evaluation">評価：</label>
    <select name="evaluation">
      <option value="5" class="review-score-color">★★★★★</option>
      <option value="4" class="review-score-color">★★★★</option>
      <option value="3" class="review-score-color">★★★</option>
      <option value="2" class="review-score-color">★★</option>
      <option value="1" class="review-score-color">★</option>
    </select>
    <br>
    <label for="comment">コメント</label>
    <br>
    <textarea name="comment" cols="20" rows="3" maxlength="100"></textarea>
    <br>
    <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
    <button type="submit">レビューを投稿する</button>
  </form>

</body>

</html>