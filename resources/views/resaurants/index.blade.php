<a href="{{ route('resaurants.create') }}"> Create New Resaurant</a>

<table>
  <tr>
    <th>Store_name</th>
    <th>telephone</th>
    <th>address</th>
    <th>Category ID</th>
    <th>Action</th>
  </tr>
  @foreach (resaurants as resaurant)
  <tr>
    <td>{{ resaurant->store_name }}</td>
    <td>{{ resaurant->telephone }}</td>
    <td>{{ resaurant->address }}</td>
    <td>{{ resaurant->open_time }}</td>
    <td>{{ resaurant->cloe_time }}</td>
    <td>{{ resaurant->regular_holiday }}</re>
    <td>{{ resaurant->max_price }}</td>
    <td>{{ resaurant->lower_price }}</td>
    <td>{{ resaurant->category_id }}</td>
    <td>
      <a href="{{ route(resaurants.show',resaurant->id) }}">Show</a>
      <a href="{{ route(resaurants.edit',resaurant->id) }}">Edit</a>
    </td>
  </tr>
  @endforeach
</table>