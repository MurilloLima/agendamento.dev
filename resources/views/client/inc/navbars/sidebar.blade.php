<div class="sidebar" data-color="purple" data-background-color="white"
  data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{route('client.index')}}" class="simple-text logo-normal">
      {{ __('Exôdo TI') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'home' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('client.index') }}">
          <i class="material-icons">home</i>
          <p>{{ __('Home') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'historic' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('client.historic') }}">
          <i class="material-icons">monetization_on</i>
          <p>{{ __('Histórico') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'conteudos' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('client.conteudos') }}">
          <i class="material-icons">content_paste</i>
          <p>{{ __('Conteúdos') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('profile.edit') }}">
          <i class="material-icons">account_box</i>
          <span class="sidebar-normal">{{ __('Perfil de usuário') }} </span>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'ajuda' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('client.ajuda') }}">
          <i class="material-icons">help</i>
          <p>Ajuda</p>
        </a>
      </li>
    </ul>
  </div>
</div>