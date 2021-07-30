  <!-- Main Sidebar Container -->
 
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./" class="brand-link">
      <img src="../Views/partial/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">TruyenCuaToi</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../Views/partial/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?=$account->name;?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="user" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Hồ Sơ
                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="user?direct=novel-case" class="nav-link">
              <i class="nav-icon far fa-bookmark"></i>
              <p>
                Tủ truyện
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user?direct=notification" class="nav-link">
            <i class="nav-icon far fa-bell"></i>
              <p>
                Thông Báo
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user?direct=setting" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
              <p>
                Cài Đặt
                
              </p>
            </a>
          </li>
          <li class="nav-header">TÁC PHẨM CỦA TÔI</li>
          <li class="nav-item">
            <a href="user?direct=create-novel" class="nav-link">
            <i class="nav-icon fas fa-book-medical"></i>
              <p>
                Thêm Truyện Mới
              </p>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>