<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>店舗一覧</title>
</head>

<body>
  <a>検索</a>
  <div class="container">
    <table>
      <tr>
        <th>店舗名</th>
        <th>電話番号</th>
        <th>住所</th>
        <th>開始時間</th>
        <th>閉店時間</th>
        <th>定休日</th>
        <th></th>
      </tr>
      @foreach ($restaurants as $restaurant)
      <tr>
        <td>{{ $restaurant->store_name }}</td>
        <td>{{ $restaurant->telephone }}</td>
        <td>{{ $restaurant->address }}</td>
        <td>{{ $restaurant->open_time }}</td>
        <td>{{ $restaurant->close_time }}</td>
        <td>{{ $restaurant->regular_holiday }}</td>
        <td><a href="{{route('restaurants.detail',$restaurant)}}">詳細</a></td>
      </tr>
      @endforeach
    </table>
    <script src="js/bootstrap.min.js"></script>
</body>