<header id="top-header">
    <div class="container">
        <nav class="navbar navbar-expand-lg">

            <a class="navbar-brand" href="{{url('/')}}"><img src="{{url('website')}}/images/logo.png" alt="ZWD AGENCY" /></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span id="nav-icon2">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('about')}}">about</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('projects')}}">Projects</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('services')}}">Services</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('team')}}">team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('#')}}">blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('contact-us')}}">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link login_display" href="{{url('#')}}" data-toggle="modal" data-target="#login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link register_display"  href="{{url('#')}}" data-toggle="modal" data-target="#register">Register</a>
                    </li>
                    @if(Auth::user())
                        <style>
                            .login_display , .register_display{
                                display: none;
                            }
                        </style>
                        <li class="dropdown nav-item">
                            <a class="dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="frame-wrap">
                                <div class="frame">
                                    <ul class="dropdown-menu pageMainNavDropdown pageMainNavDropdown1">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</header>


                    {{--<li class="nav-item ">--}}
                        {{--<a class="nav-link" href="{{url('events')}}">events</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{url('pricing')}}">pricing</a>--}}
                    {{--</li>--}}
