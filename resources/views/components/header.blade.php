<header class="home-header">
  <h1><a href="{{route('restaurants.index')}}">NAGOYAMESHI</a></h1>
  <nav>
    <ul>
      <li><a href="{{route('restaurants.index')}}">店舗一覧</a></li>
      <li><a href="{{route('reservations.index')}}">予約一覧</a></li>
      <li><a href="{{route('mypage.favorite')}}">お気に入り一覧</a></li>
      <li><a href="{{route('mypage')}}">会員情報編集</a></li>
      <li><a href="{{route('companies.index')}}">会社情報</a></li>
    </ul>
  </nav>
  <nav>
    @auth
    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
      ログアウト
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    @endauth
  </nav>

</header>