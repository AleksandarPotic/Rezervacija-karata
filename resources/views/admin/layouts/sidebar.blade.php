<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('uploads/'.Auth::user()->image) }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                {{ Auth::user()->name }} {{ Auth::user()->lastName }}<br>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            @if(Auth::user()->can('reservations.view') || Auth::user()->can('requirements'))
                <li class="@yield('l1') treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Rezervacija karata</span>
                        <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
                    </a>
                    <ul class="treeview-menu">
                        @can('reservations.view', Auth::user())
                            <li class="@yield('k1')"><a href="{{ route('rezervacija.index') }}"><i class="fa fa-circle-o"></i>Rezervacije</a></li>
                        @endcan
                        @can('requirements', Auth::user())
                            <li class="@yield('k10')"><a href="{{ route('zahtevi.index') }}"><i class="fa fa-circle-o"></i>Zahtevi</a></li>
                            @endcan
                    </ul>
                </li>
            @endcan
            @if(Auth::user()->can('matches.view') || Auth::user()->can('sectors.view'))
                <li class="@yield('l2') treeview">
                    <a href="#">
                        <i class="fa fa-dashboard"></i> <span>Utakmice</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        @can('matches.view', Auth::user())
                            <li class="@yield('k2')"><a href="{{ route('utakmice.index') }}"><i class="fa fa-circle-o"></i>Utakmice</a></li>
                        @endcan
                        @can('sectors.view', Auth::user())
                            <li class="@yield('k3')"><a href="{{ route('sektori.index') }}"><i class="fa fa-circle-o"></i>Sektori</a></li>
                            @endcan
                    </ul>
                </li>
            @endif
            @can('users.view', Auth::user())
            <li class="treeview">
                <li class="@yield('k5')"><a href="{{ route('korisnici.index') }}"><i class="fa fa-circle-o"></i>Administratori</a></li>
            </li>
            @endcan
                @can('clients', Auth::user())
            <li class="treeview">
                <li class="@yield('k20')"><a href="{{ route('klijenti.index') }}"><i class="fa fa-circle-o"></i>Korisnici</a></li>
            </li>
            @endcan
            @can('tidings.view', Auth::user())
            <li class="treeview">
                <li class="@yield('k6')"><a href="{{ route('vesti.index') }}"><i class="fa fa-circle-o"></i>Vesti</a></li>
            </li>
            @endcan
            @can('messages', Auth::user())
                <li class="treeview">
                    <li class="@yield('k7')"><a href="{{ route('admin.poruke') }}"><i class="fa fa-circle-o"></i>Poruke</a></li>
                </li>
            @endcan
            @can('roles', Auth::user())
                <li class="treeview">
                    <li class="@yield('k8')"><a href="{{ route('role.index') }}"><i class="fa fa-circle-o"></i>Uloge</a></li>
                </li>
            @endcan
            @can('permissions', Auth::user())
                <li class="treeview">
                    <li class="@yield('k9')"><a href="{{ route('permission.index') }}"><i class="fa fa-circle-o"></i>Dozvole</a></li>
                </li>
            @endcan
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>