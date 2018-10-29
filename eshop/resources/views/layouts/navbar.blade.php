<ul class="nav navbar-nav navbar-right">
  <li class="{{ $nav === 'home' ? 'active' : '' }}"><a href="/home">Home</a></li>
  <li class="{{ $nav === 'profile' ? 'active' : '' }}"><a href="/profile">My Profile</a></li>
  <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        Exercises <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
        <li>
          <a href="{{ route('saveSessionTest') }}">Set Session</a>
        </li>
        <li>
            <a href="{{ route('showSessionTest') }}">Show Session</a>
        </li>
        <li>
            <a href="{{ route('page1') }}">Page 1</a>
        </li>
        <li>
            <a href="{{ route('page2') }}">Page 2</a>
        </li>
    </ul>
  </li>
  <li>
    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @if (Auth::guest())
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
      @else
          <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
      @endif
    </ul>

  </li>
</ul>