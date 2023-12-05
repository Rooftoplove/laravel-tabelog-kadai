<a href="{{ route('restaurants.create') }}"> Create New Resaurant</a>

<table>
  <tr>
    <th>Store_name</th>
    <th>telephone</th>
    <th>address</th>
    <th>Category ID</th>
    <th>Action</th>
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