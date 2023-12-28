<header class="home-header">
  <h1><a href="{{route('home')}}">NAGOYAMESHI</a></h1>
  <nav>
    <ul>
      <li><a href="{{route('restaurants.index')}}">店舗一覧</a></li>
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