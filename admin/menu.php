<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/avatar.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/index.php" class="d-block">Ahsennur Uslu</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Ara" aria-label="Search">
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
          <!--  .nav-icon class  sınıfını kullanarak bağlantılara ikon ekleme kısmı
                font-awesome ile veya başka bir  -->


          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Kullanıcı/İçerik
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="mailbox.php" class="nav-link <?=($page=="user_list")?'active':''?>">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Gelen Kutusu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="users_list.php" class="nav-link <?=($page=="user_list")?'active':''?>">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Kullanıcı Listesi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="register.php" class="nav-link <?=($page=="create_user")?'active':''?> ">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Kullanıcı Oluştur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="contentlist.php" class="nav-link <?=($page=="content_list")?'active':''?>">
                  <i class="fas fa-list nav-icon"></i>
                  <p>İçerik Listesi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="create_content.php" class="nav-link <?=($page=="create_content")?'active':''?>">
                  <i class="fas fa-file nav-icon"></i>
                  <p>İçerik Oluştur</p>
                </a>
              </li>
            </ul>
          </li>
         

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>