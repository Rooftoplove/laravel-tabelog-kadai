<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>店舗詳細</title>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
  <h1>店舗詳細</h1>
  <h2>{{$restaurant->store_name}}</h2>
  <td>電話番号:{{ $restaurant->telephone }}</td><br>
  <td>{{ $restaurant->address }}</td><br>
  <td>{{ $restaurant->open_time }}</td><br>
  <td>{{ $restaurant->close_time }}</td><br>
  <td>{{ $restaurant->regular_holiday }}</td><br>
  <td>{{ $restaurant->max_price }}</td><br>
  <td>{{ $restaurant->lower_price }}</td><br>
  <td>{{ $restaurant->category_id }}</td><br>

  <h2><a href="{{route('reviews.index')}}">レビュー</a></h2>
  <td>登録</td>
  <h2><a href="{{route('subscription')}}">予約</a></h2>
</body>