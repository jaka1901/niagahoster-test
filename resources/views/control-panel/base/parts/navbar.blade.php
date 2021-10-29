<nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo" href="index.html"><img src="/control-panel/images/logo.svg" alt="logo" /></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/control-panel/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-stretch">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="mdi mdi-menu"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right d-flex">
      <li class="nav-item nav-profile">
        <a class="nav-link" href="#">
          <div class="nav-profile-text d-block">
            <p class="mb-1 text-black">{{ \Auth::user()->name }}</p>
          </div>
        </a>
      </li>
      <li class="nav-item nav-logout d-lg-block">
        <a class="nav-link" href="#" id="logout-btn">
          <i class="mdi mdi-power"></i>
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
    
    <form method="post" action="/logout" id="logout-form" class="d-none">
      @csrf
      @method('post')
    </form>
  </div>
</nav>

@section('scripts-bottom')
<script type="text/javascript">
  $('#logout-btn').on('click', function(e){
    e.preventDefault()
    $('#logout-form').submit()
  })
</script>
@endsection