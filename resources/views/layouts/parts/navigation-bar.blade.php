<nav class="navbar ms-navbar">
    <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
    </div>
    <div class="logo-sn logo-sm ms-d-block-sm">
      <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="https://via.placeholder.com/84x41" alt="logo"> </a>
    </div>
    <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
      <li class="ms-nav-item ms-nav-user dropdown">
        <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="https://via.placeholder.com/270x270" alt="people"> </a>
        <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
          <li class="dropdown-menu-header">
            <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, {{ auth()->user()->Nombre }} {{ auth()->user()->Apellido_Paterno }} {{ auth()->user()->Apellido_Materno }}</span></h6>
          </li>
          <li class="dropdown-divider"></li>
          <li class="dropdown-menu-footer">
            <form method="POST" id="logout" action="{{ route('logout') }}">
              {{ csrf_field() }}
              <a class="media fs-14 p-2" href="javascript:{}" onclick="document.getElementById('logout').submit();"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
            </form>
          </li>
        </ul>
      </li>
    </ul>
    <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
      <span class="ms-toggler-bar bg-white"></span>
    </div>
  </nav>
