<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>レビュー</title>
</head>

<body>
  <h1>{{$restaurant->store_name}}のレビュー</h1>
  <form method="POST" action="{{route('reviews.register')}}">
    @csrf
    <label for="evaluation">評価：</label>
    <input type="number" name="evaluation" min="0" max="5" require>
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