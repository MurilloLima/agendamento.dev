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
            <a href="#" class="nav-link">Contatos</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Messages Dropdown Menu -->
        {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-comments"></i>
                <span class="badge badge-danger navbar-badge">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="#" class="dropdown-item">
                    <!-- Message Start -->
                    <div class="media">
                        <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                        <div class="media-body">
                            <h3 class="dropdown-item-title">
                                Brad Diesel
                                <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                            </h3>
                            <p class="text-sm">Call me whenever you can...</p>
                            <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                        </div>
                    </div>
                    <!-- Message End -->
                </a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
        </li> --}}
        <!-- Notifications Dropdown Menu -->
        {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">{{count(App\Models\Notification::where('user_id', auth()->user()->id))}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">{{count(App\Models\Notification::all())}}
                    Notificações</span>
                <div class="dropdown-divider"></div>
                @forelse (App\Models\Notification::all() as $item)
                <a href="{{ route('admin.notificaton.delete', ['id'=>$item->id]) }}" class="dropdown-item">
                    <i class="nav-icon fa fa-calendar-check"></i> {{$item->user->name}}
                    <span class="float-right text-muted text-sm">3 mins</span>
                </a>
                @empty
                <span>Nenhum notificação</span>
                @endforelse

                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item dropdown-footer">View todas</a>
            </div>
        </li> --}}
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-orange elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('client.index') }}" class="brand-link">

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
                    alt="User Image" width="40" height="40">
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
                    <a href="{{ route('client.index') }}"
                        class="nav-link{{ $activePage == 'client.index' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('client.agendamentos') }}"
                        class="nav-link{{ $activePage == 'client.agendamentos' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Meus Agendamentos
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('client.profile') }}"
                        class="nav-link{{ $activePage == 'client.profile' ? ' active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Meus dados
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