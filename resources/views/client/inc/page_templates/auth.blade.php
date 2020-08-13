<div class="wrapper ">
  @include('client.inc.navbars.sidebar')
  <div class="main-panel">
    @include('client.inc.navbars.navs.auth')
    @yield('content')
    @include('client.inc.footers.auth')
  </div>
</div>