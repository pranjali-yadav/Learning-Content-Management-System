 <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
    <!--   <img src="#" alt="AdminLTE Logo" class="brand-image  elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light"> Client's Project</span> 
    </a>
 
    <!-- Sidebar -->  
    <div class="sidebar"> 
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex"> 
        <div class="image">
          <img src="<?php echo (!empty($user['photo'])) ? '../images/'.$user['photo'] : '../images/profile.jpg'; ?>" class="img-circle elevation-2" alt="User Image">
        </div> 
        <div class="info">
          <a href="home.php" class="d-block"><?php echo $user['firstname'].' '.$user['lastname']; ?></a>  
        </div>   
      </div>
      

        <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
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

          <li class="nav-item">
            <a href="mcat.php" class="nav-link"> 
              <i class="nav-icon fa fa-list text-orange"></i>
              <p class="text"> Main Category
             </p> 
            </a>
          </li> 


          <li class="nav-item">
            <a href="scat.php" class="nav-link">  
              <i class="nav-icon fa fa-list text-info"></i>
              <p class="text"> Sub-Category
             </p>  
            </a>
          </li>     

 
            <li class="nav-item">
            <a href="content.php" class="nav-link"> 
              <i class="nav-icon fa fa-file-alt text-pink"></i>
              <p class="text"> Course's Content
             </p> 
            </a>
          </li> 

        
          <li class="nav-header">Setting</li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon far fa-id-card"></i>
              <p>
                Profile
              </p>
            </a>
          </li>

            <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
              <p>Logout</p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>