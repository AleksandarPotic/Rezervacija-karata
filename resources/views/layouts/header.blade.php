<!-- header -->
<header>
    <div class="header" align="center">
        <div class="header7">
            <div class="row">
                <div class="col-lg-3 col-lg-offset-8" style="margin-top: 10px;">
                    @if(Auth::guest())
                        <a href="{{ route('login') }}"><button class="btn btn-primary"><font face="Impact">Prijava</font></button></a>
                        <a href="{{ route('register') }}"><button class="btn btn-danger"><font face="Impact">Registracija</font></button></a>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="margin-left: -40px; margin-top: -0px;">
                                <img src="{{ asset('uploads/'.Auth::user()->image) }}" class="img-circle" alt="Cinque Terre" width="40" height="40" style="margin-top: -10px; margin-left: -5px;">
                                <font face="Impact" color="white" size="5">{{ Auth::user()->name }} {{ Auth::user()->lastName }}</font><span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="margin-top: 8px; margin-left: 40px; width: 200px;">
                                <li>
                                    <a href="{{ route('profile') }}">
                                        <font face="Impact" size="4"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Profil</font>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('req.index') }}">
                                        <font face="Impact" size="4"><span class="glyphicon glyphicon glyphicon-paste" aria-hidden="true"></span> Zahtevi</font>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('cart') }}">
                                        <font face="Impact" size="4"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Korpa</font>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <font face="Impact" size="4"><span class="glyphicon glyphicon-log-out"></span> Odjavi se</font>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </div>
            </div>
        </div>
        <div class="header6">
			<span class="ZvanicniSajt">
				<img src="{{ asset('user/images/logo.jpg')}}" width="700px" height="250px">
			</span>
        </div>
    </div>
    <!-- navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="logologo">
                    <a href="/"><img src="{{ asset('user/images/logologo.jpg') }}" height="55px" width="90px"><img src="{{ asset('user/images/logoFK.png') }}" height="55px"></a>
                    @if(Auth::guest())<a href="{{ route('login') }}"><button class="btn btn-primary">Prijava</button></a>
                        @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="margin-left: -20px;">
                                <font face="Impact" color="white" size="4">{{ Auth::user()->name }} </font><span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu" style="margin-top: 0px;">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <font face="Impact" size="4">Odjavi se</font>
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                        @endif
                </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="@yield('a1')"><a href='/'>POČETNA</a></li>
                    <li class="@yield('a2')"><a href='/vesti'>VESTI</a></li>
                    <li class="@yield('a3')"><a href='/istorija'>ISTORIJA</a></li>
                    <li class="@yield('a4')"><a href='/rezultati'>REZULTATI</a></li>
                    <li class="@yield('a5')"><a href='/tim'>TIM</a></li>
                    <li class="@yield('a6')">@if(Auth::guest()) <a href='/login'>REZERVACIJA</a>@else <a href='/rezervacija'>REZERVACIJA</a>@endif</li>
                    <li class="@yield('a7')"><a href='/kontakt'>KONTAKT</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>