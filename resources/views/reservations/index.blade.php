<a href="{{ route('reservations.create') }}"> Create New Reservation</a>

<table>
  <tr>
    <th>ID</th>
    <th>予約時間</th>
    <th>予約人数</th>
  </tr>
  @foreach($reservations as $reservation)
  <tr>
    <td>{{ $reservation->id }}</td>
    <td>{{ $reservation->time }}</td>
    <td>{{ $reservation->people }}</td>
  </tr>
  @endforeach
</table>