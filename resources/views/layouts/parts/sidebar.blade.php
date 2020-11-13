<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.html"> <img src="https://via.placeholder.com/216x62" alt="logo"> </a>
      <a href="#" class="text-center ms-logo-img-link"> <img src="{{ asset('assets/img/User-Account-Person-PNG-File.png') }}" alt="logo"></a>
      <h5 class="text-center text-white mt-2">{{ auth()->user()->Name }} {{ auth()->user()->LastName }}</h5>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="{{ route('home') }}">Dashboard</a> </li>
        </ul>
      </li>
      <!-- /Dashboard -->
      <!-- Projects -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#project" aria-expanded="false" aria-controls="project">
          <span><i class="fas fa-project-diagram"></i>Projects</span>
        </a>
        <ul id="project" class="collapse" aria-labelledby="project" data-parent="#side-nav-accordion">
          <li> <a href="pages/doctor/add-doctor.html">Add Project</a> </li>
          <li> <a href="{{ route('listar.proyectos') }}">Projects List</a> </li>
        </ul>
      </li>
    </ul>
  </aside>