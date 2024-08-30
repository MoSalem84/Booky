<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{ route('home') }}" class="logo">
                        <img src="{{asset('front')}}/assets/images/logo.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                     <!-- Authentication Links -->

                     <li><a href="{{ route('home')}}" class="active">Home</a></li>
                     <li><a href="{{route('front.discover')}}">Discover Books</a></li>
                     <li><a href="{{route('front.authors')}}">Authors</a></li>
                     <li><a href="{{ route('front.contact')}}">Contact Us</a></li>
                     {{-- <li><a href="{{ route('front.about')}}">About Us</a></li> --}}
{{-- if no login --}}
                     @guest
                     @if (Route::has('login'))
                     <li><a href="{{ route('login')}}">Login</a></li>

                 @endif

                 @if (Route::has('register'))
                     <li class="nav-item">

                        <li><a href="{{ route('register')}}">Register</a></li>
                     </li>
                 @endif
{{-- if user has login --}}
                 @else

                 <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                        {{-- show profile --}}
                        <a class="dropdown-item" href="{{ route('front.user.profile') }}">
                      {{ __('Profile') }}  </a>

                      {{-- show borrow status --}}
                      <a class="dropdown-item" href="{{ route('front.borrow.status') }}">
                       My borrow status  </a>

                        {{-- logout --}}
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


                        {{-- <li><a href="{{ url('admin-panel') }}">Admin Panel</a></li> --}}

                    </ul>

                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
