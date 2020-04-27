
        <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="/about">About</a>
            <a class="nav-link" href="/permissions/create">Submit</a>
                <!-- Authentication Links -->
                @guest
                    <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-user fa-1x"></i> login</a>
                @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/permissions') }}">Permissions</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                @endguest
        </nav>
        </div>
    </header>
