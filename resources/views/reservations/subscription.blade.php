<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>予約</title>
</head>

<body>
  <h1>予約</h1>
  <form method="POST" action="{{route('reservations.register')}}">
    @csrf
    <label for="date">予約日:</label>
    <input type="date" name="date" required>
    <label for="time">予約時間:</label>
    <input type="time" name="time" min="11:00" max="23:00" required>

    <label for="people">予約人数:</label>
    <input type="number" name="people" required>

    <button type="submit">予約する</button>
  </form>
</body>

</html>