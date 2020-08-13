<div class="wrapper ">
  @include('admin.inc.navbars.sidebar')
  <div class="main-panel">
    @include('admin.inc.navbars.navs.auth')
    @yield('content')
    @include('admin.inc.footers.auth')
  </div>
</div>