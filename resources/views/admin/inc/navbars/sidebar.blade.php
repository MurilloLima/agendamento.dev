<div class="sidebar" data-color="purple" data-background-color="white"
  data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{route('admin.index')}}" class="simple-text logo-normal">
      {{ __('Exôdo TI') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'home' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.index') }}">
          <i class="material-icons">home</i>
          <p>{{ __('Home') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'clients' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.clients') }}">
          <i class="material-icons">person_search</i>
          <p>{{ __('Clientes') }}</p>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" data-toggle="collapse" href="#laravelExample" aria-expanded="false">
          <i class="material-icons">cached</i>
          <p>Solicitações
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample" style="">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'depositos' ? ' active' : '' }}">
              <a href="{{ route('admin.depositos') }}" class="nav-link">
                <i class="material-icons">cloud_upload</i>
                <p>Depósitos</p>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'retiradas' ? ' active' : '' }}">
              <a href="{{ route('admin.retiradas') }}" class="nav-link">
                <i class="material-icons">cloud_download</i>
                <p>Retiradas</p>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item{{ $activePage == 'planos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.planos') }}">
          <i class="material-icons">view_agenda</i>
          <p>{{ __('Planos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'blog' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.blog') }}">
          <i class="material-icons">book_online</i>
          <p>{{ __('Blog') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('admin.profile.edit') }}">
          <i class="material-icons">account_box</i>
          <span class="sidebar-normal">{{ __('Perfil de usuário') }} </span>
        </a>
      </li>
    </ul>
  </div>
</div>