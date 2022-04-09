
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/dashboard" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="https://shurjomukhi.com.bd/" class="nav-link">Official Website</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" id="myInput" onkeyup="myFunction()" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Fullscreen -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- /Fullscreen -->

      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>




      <li class="nav-item">
        <a class="nav-link" data-widget="Logout" href="/logout" role="button">
        <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="assets/Images/logo.png" alt="Surjomukhi Logo" class="brand-image">
      <span class="brand-text font-weight-light">shurjomukhi LTD.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar"  type="text" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/dashboard" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
             
              <p>
                Users Dashboard
              
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="{{route('admininfo')}}" class="nav-link ">
              <i class="nav-icon fas fa-user-shield"></i>
              <p>
                Users
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('userinfo')}}" class="nav-link ">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User List
                
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="laptop.php" class="nav-link ">
              <i class="nav-icon fas fa-laptop"></i>
              <p>
                Laptop List
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="inventory.php" class="nav-link ">
              <i class="nav-icon fas fa-laptop-house"></i>
              <p>
                Laptop in Stock
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="allocate.php" class="nav-link ">
              <i class="nav-icon fas fa-user-tag"></i>
              <p>
                Allocated to Users
              </p>
            </a>
          </li>
          
         
          <li class="nav-item">
            <a href="faulty.php" class="nav-link ">
              <i class="nav-icon fas fa-skull-crossbones"></i>
              <p>
                Faulty Laptops
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="customize.php" class="nav-link ">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Customized Laptops
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="invoice.php" class="nav-link ">
              <i class="nav-icon fas fa-file-invoice-dollar"></i>
              <p>
                Invoice
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="history.php" class="nav-link ">
              <i class="nav-icon fas fa-history"></i>
              <p>
                User History
              </p>
            </a>
          </li> -->
</ul>
      </nav>
      <!-- /.sidebar-menu -->
   
    <!-- /.sidebar -->
  </aside>
 <!-- Content Wrapper. Contains page content -->
