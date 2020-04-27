
    <div class="inner">
        <h3 class="masthead-brand"><a href="/">klnaMaswuwl - كلنا مسؤول</a></h3>
        <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link active" href="/">الرئيسية</a>
            <a class="nav-link" href="/about">عنا</a>
            <a class="nav-link" href="/permissions/create">طلب تصريح</a>
                <!-- Authentication Links -->
                @guest
                    <a class="nav-link" href="{{ route('login') }}"> <i class="fas fa-user fa-1x"></i> الدخول</a>
                @else
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/permissions') }}">لوحة التحكم</a>
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
