<nav class="navbar fixed-top">
    <ul class="navbar-nav navbar-expand w-100">
            <li class="nav-item">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Projects
                </a>
            </li>

        @guest
            <li class="nav-item ml-auto">
                <a class="nav-link" href="/projects">Projects</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
        @else
            <li class="nav-item ml-auto">
                <a class="nav-link" href="/projects">Projects</a>
            </li>

            <li class="nav-item">
                    <a class="nav-link" href="{{ route('projectCreate') }}">Create</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
            <form id="form-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endguest
    </ul>
</nav>
