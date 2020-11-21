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

          <!-- Materials -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#materials" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Materials </span>
        </a>
        <ul id="materials" class="collapse" aria-labelledby="materials" data-parent="#side-nav-accordion">
              <li> <a href="{{ route('materiales') }}">Materials list</a> </li>
        </ul>
      </li>
      <!-- /Materials -->

        <!-- customers -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#doctor" aria-expanded="false" aria-controls="doctor">
              <span><i class="fas fa-user"></i>Customers</span>
            </a>
            <ul id="doctor" class="collapse" aria-labelledby="doctor" data-parent="#side-nav-accordion">
              <li> <a href="{{ route('crear') }}">Add Clients</a> </li>
              <li> <a href="{{ route('clientes') }}">Client list</a> </li>
            </ul>
        </li>

        <!-- customers -->
        <!-- Projects -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#patient" aria-expanded="false" aria-controls="patient">
              <span><i class="fas fa-project-diagram"></i>Projects</span>
            </a>
            <ul id="patient" class="collapse" aria-labelledby="patient" data-parent="#side-nav-accordion">
              <li> <a href="../patient/add-patient.html">Add Project</a> </li>
              <li> <a href="{{ route('listar.proyectos') }}">Projects List</a> </li>

            </ul>
        </li>
        <!-- /Projects -->
        <!-- Work orders -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#department" aria-expanded="false" aria-controls="department">
              <span><i class="far fa-file-alt"></i>Work orders</span>
            </a>
            <ul id="department" class="collapse" aria-labelledby="department" data-parent="#side-nav-accordion">
              <li> <a href="../department/add-department.html">New Work Order</a> </li>
              <li> <a href="../department/department-list.html">Orders List</a> </li>

            </ul>
        </li>
        <!-- /Work orders -->
        <!-- /Administrator -->
        <li class="menu-item">
            <a href="#" class="has-chevron" data-toggle="collapse" data-target="#notice" aria-expanded="false" aria-controls="notice">
              <span><i class="far fa-user"></i>Administrator</span>
            </a>
            <ul id="notice" class="collapse" aria-labelledby="notice" data-parent="#side-nav-accordion">
              <li> <a href="../notice/add-notice.html">Add Users</a> </li>
              <li> <a href="../notice/add-notice.html">Users List</a> </li>
            </ul>
        </li>
        <!-- /Administrator -->
    </ul>
  </aside>