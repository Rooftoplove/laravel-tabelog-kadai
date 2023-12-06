<a href="{{ route('restaurants.create') }}">店舗登録</a>

<table>
  <tr>
    <th>店舗名</th>
    <th>電話番号</th>
    <th>住所</th>
    <th>開始時間</th>
    <th>閉店時間</th>
    <th>定休日</th>
    <th>上限価格</th>
    <th>下限価格</th>
    <th>カテゴリID</th>
  </tr>
  @foreach ($restaurants as $restaurant)
  <tr>
    <td>{{ $restaurant->store_name }}</td>
    <td>{{ $restaurant->telephone }}</td>
    <td>{{ $restaurant->address }}</td>
    <td>{{ $restaurant->open_time }}</td>
    <td>{{ $restaurant->close_time }}</td>
    <td>{{ $restaurant->regular_holiday }}</td>
    <td>{{ $restaurant->max_price }}</td>
    <td>{{ $restaurant->lower_price }}</td>
    <td>{{ $restaurant->category_id }}</td>

  </tr>
  @endforeach
</table>