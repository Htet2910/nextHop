  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/img/icon.png')}}"  class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light" style="color:#fe6614;">NextHop</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="{{ asset('/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a>MENUS</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
  <!--     <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="{{url('backend/navbars')}}"  class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Navbar
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{url('backend/abouts')}}" class="nav-link">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>
                About
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{url('backend/services')}}" class="nav-link">
              <i class="nav-icon fas fa-object-group"></i>
              <p>
                Services
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{url('backend/partners')}}" class="nav-link">
              <i class="nav-icon fas fa-object-group"></i>
              <p>
                Partner
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('backend/contacts')}}" class="nav-link">
              <i class="nav-icon fas fa-object-group"></i>
              <p>
                Contact
              </p>
            </a>
          </li> 
        </ul>
      </nav>

    </div>
 <!-- /.sidebar-menu -->
    <!-- /.sidebar -->
  </aside>