<div class="container  d-flex justify-content-center mt-3">
  <div class="w-75">
    <h1>お気に入り</h1>
    <a href="{{route('restaurants.index')}}">ホーム</a> >お気に入り

    <hr>
    @foreach ($restaurants as $restaurant)
    <div>{{$restaurant->store_name}}</div>

    @endforeach


    <hr>
  </div>
</div>