<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark  bg-dark">
        <a class="navbar-brand" href="/">{{ config('app.name', 'CSEARCHIVE') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
              <a class="nav-link " href="/">HOME </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">ABOUT</a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">PROJECTS</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/projects">All Projects</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="/projects">IOT </a></li>
                    <li><a class="dropdown-item" href="/projects">WEB</a></li>
                    <li><a class="dropdown-item" href="#!">ML</a></li>
                    <li><a class="dropdown-item" href="#!">ANDROID</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/service">Contact </a>
              </li>

                </ul>
                    <form class="form-line mt-2 mt-md-0">
                        <div class="input-group">
                            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <button type="button" class="btn btn-outline-primary">search</button>
                          </div>
                      </form>
                                      <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto"style="margin-right:60px">
                    <!-- Authentication Links -->

                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->firstname }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('home')}}">Dashboard</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>

        </div>
    </nav>
</div>

