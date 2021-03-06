<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('client.index') }}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Helps</a>
        </li>
    </ul>
    <form action="{{ route('admin.clients.search') }}" method="GET" class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" name="value" type="search" placeholder="Pesquisar"
                aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">{{count(App\Models\Notification::all())}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">{{count(App\Models\Notification::all())}}
                    Notificações</span>
                <div class="dropdown-divider"></div>
                @forelse (App\Models\Notification::orderby('created_at', 'desc')->take(6)->get() as $item)
                <a href="{{ route('admin.notificaton.delete', ['id'=>$item->id]) }}" class="dropdown-item">
                    <i class="nav-icon fa fa-calendar-check"></i> {{$item->user->name}}
                    <span class="float-right text-muted text-sm">{{$item->created_at->diffForHumans()}}</span>
                </a>
                @empty
                <div class="text-center">
                    <span>Nenhuma notificação</span>
                </div>
                @endforelse

                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">View todas</a>
            </div>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-orange elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('assets/panel/dist/img/AdminLTELogo.png') }}" alt="Agendamento"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">
            {{ config('app.name', 'Agendamento') }}
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('upload/upload/'.auth()->user()->img) }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}"
                        class="nav-link{{ $activePage == 'admin.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.agendamentos') }}"
                        class="nav-link{{ $activePage == 'admin.agendamentos' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Agendamentos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.clients') }}"
                        class="nav-link{{ $activePage == 'admin.clients' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Clientes
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.profile') }}"
                        class="nav-link{{ $activePage == 'admin.profile' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Perfil
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="nav-link">
                        <i class="nav-icon fa fa-stop-circle"></i>
                        <p>
                            {{ __('Logout') }}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>