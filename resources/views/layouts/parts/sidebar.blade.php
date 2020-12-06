<aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">
  <!-- Logo -->
  <div class="logo-sn ms-d-block-lg">
    <a class="pl-0 ml-0 text-center" href="index.html"> <img src="https://via.placeholder.com/216x62" alt="logo"> </a>
    <a href="#" class="text-center ms-logo-img-link"> <img src="{{ asset('assets/img/User-Account-Person-PNG-File.png') }}" alt="logo"></a>
    <h5 class="text-center text-white mt-2">{{ auth()->user()->Nombre }} {{ auth()->user()->Apellido_Paterno }} {{ auth()->user()->Apellido_Materno }}</h5>
  </div>
  <!-- Navigation -->
  <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="{{ route('home') }}">
          <span><i class="material-icons fs-16"></i>Dashboard</span>
        </a>
      </li>
      <!-- /Dashboard -->

      <!-- Projects -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#patient" aria-expanded="false" aria-controls="patient">
            <span><i class="fas fa-project-diagram"></i>Projects</span>
          </a>
          <ul id="patient" class="collapse" aria-labelledby="patient" data-parent="#side-nav-accordion">
            <li> <a href="{{ route('listar.proyectos') }}">Projects List</a></li>
            <li> <a href="{{ route('listar.materiales') }}">Materials </a></li>
            <li> <a href="{{ route('listar.razon') }}">Razon del trabajo</a></li>
            <li> <a href="{{ route('listar.tipo_trabajo') }}">Trabajador </a></li>
          </ul>
      </li>
      <!-- /Projects -->
      <!-- /Administrator -->
      <li class="menu-item">
          <a href="#" class="has-chevron" data-toggle="collapse" data-target="#notice" aria-expanded="false" aria-controls="admin">
            <span><i class="far fa-user"></i>Administrator</span>
          </a>
          <ul id="notice" class="collapse" aria-labelledby="notice" data-parent="#side-nav-accordion">
           
            <li> <a href="{{ route('alltickets') }}">All tickets</a></li>
            <li> <a href="{{ route('allprojects') }}">All Projects</a></li>

          </ul>
      </li>
      <!-- /Administrator -->
  </ul>
</aside>