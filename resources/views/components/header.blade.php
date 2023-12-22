<header class="home-header">
  <h1>NAGOYAMESHI</h1>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <nav>
    <ul>
      <li><a href="{{route('home')}}">ホーム</a></li>
      <li><a href="{{route('restaurants.index')}}">店舗一覧</a></li>
      <button><a href="{{route('home')}}">ホーム</a></button>
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