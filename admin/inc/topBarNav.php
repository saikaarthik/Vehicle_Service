<style>
  .user-img{
        position: absolute;
        height: 27px;
        width: 27px;
        object-fit: cover;
        left: -7%;
        top: -12%;
  }
  .btn-rounded{
        border-radius: 50px;
  }
</style>
<!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-dark border border-light border-top-0  border-left-0 border-right-0 navbar-light text-sm">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
         
          <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo base_url ?>admin" class="nav-link fw-bolder">Vehicle Service Management System-Admin Page</a>
          </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          
          <!-- Messages Dropdown Menu -->
          <li class="nav-item">
            <div class="btn-group nav-link">
                  <button type="button" class="btn btn-rounded badge badge-light dropdown-toggle dropdown-icon" data-toggle="dropdown">
                    
                    <span class="ml-3"><?php echo ucwords($_settings->userdata('firstname').' '.$_settings->userdata('lastname')) ?></span>
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu  " style=" color:white" role="menu">
                    <a class="dropdown-item" style="color:white" href="<?php echo base_url.'admin/?page=user' ?>"><span class="fa"></span> My Account</a>
                    
                    <a class="dropdown-item" style="color:white" href="<?php echo base_url.'/classes/Login.php?f=logout' ?>"><span style=" color:black" class="fas  "></span> Logout</a>
                  </div>
              </div>
          </li>
          <li class="nav-item">
            
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.navbar -->