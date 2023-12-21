<!DOCTYPE html>
<html lang="ja">



<body>
  <h1>{{$restaurant->store_name}}</h1>
  <td>電話番号：{{ $restaurant->telephone }}</td><br>
  <td>住所：{{ $restaurant->address }}</td><br>
  <td>開店時間：{{ $restaurant->open_time }}</td><br>
  <td>閉店時間：{{ $restaurant->close_time }}</td><br>
  <td>定休日：{{ $restaurant->regular_holiday }}</td><br>
  <td>価格：{{ $restaurant->lower_price }}〜{{ $restaurant->max_price }}</td><br>

  <td><a href="{{route('subscription')}}">予約追加</a></td>



  <br><br>
  <td>評価</td>
  <select name="evaluation">
    <option value="evaluation0">0</option>
    <option value="evaluation1">1</option>
    <option value="evaluation2">2</option>
    <option value="evaluation3">3</option>
    <option value="evaluation4">4</option>
    <option value="evaluation5">5</option>
  </select>
  <br>

  <td>感想</td><br>
  <textarea name="comment" cols="20" rows="3"></textarea><br>

  <button>レビューを投稿する</button>
  <h2>レビュー</h2>

  <a href="{{route('reviews.index')}}">レビュー投稿</a></td>
</body>