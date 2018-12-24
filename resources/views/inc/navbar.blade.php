<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel mb-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('homepage') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item {{ Request::is('services') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('services') }}">Services</a>
                </li>
                <li class="nav-item {{ Request::is('posts') ? 'active' : '' }}">
                    <a class="nav-link" href="{{ route('posts') }}">Blog</a>
                </li>
                @auth
                    <li class="nav-item {{ Request::is('posts/create') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('create') }}">Create Post</a>
                    </li>
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item {{ Request::is('login') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item {{ Request::is('register') ? 'active' : '' }}">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <a href="{{ route('dashboard') }}" class="dropdown-item">Dashboard</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
