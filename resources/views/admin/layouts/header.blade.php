<header class="main-header">
    <!-- Logo -->
    <a href="/admin/home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">FK<b>P</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>FKPobeda</b>Admin</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="col-lg-3 col-lg-offset-8">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{ Auth::user()->name }} {{ Auth::user()->lastName }}
                        <img src="{{ asset('uploads/'.Auth::user()->image) }}" class="user-image" alt="User Image">
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ asset('uploads/'.Auth::user()->image) }}" class="img-circle" alt="User Image">
                            <br>
                            <font size="5" color="white">{{ Auth::user()->name }} {{ Auth::user()->lastName }}
                            </font>
                            <p>{{ Auth::user()->email }}</p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('admin.profile') }}" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">

                            <a href="{{ route('logout') }}" class="btn btn-default btn-flat"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Odjavi se
                            </a>
                            </div>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>
</header>