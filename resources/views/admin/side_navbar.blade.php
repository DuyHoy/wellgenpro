<nav class="side-navbar">
    <div class="side-navbar-wrapper">
      <!-- Sidebar Header    -->
      <div class="sidenav-header d-flex align-items-center justify-content-center">
        <!-- User Info-->
        <div class="sidenav-header-inner text-center"><img src={{asset('distribution/img/avatar-7.jpg')}} alt="person" class="img-fluid rounded-circle">
          <h2 class="h5">Nathan Andrews</h2><span>Web Developer</span>
        </div>
        <!-- Small Brand information, appears on minimized sidebar-->
        <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
      </div>
      <!-- Sidebar Navigation Menus-->
      <div class="main-menu">
        <h5 class="sidenav-heading">Main</h5>
        <ul id="side-main-menu" class="side-menu list-unstyled">                  
          <li><a href={{url()->current()}}> <i class="icon-home"></i>Tạo Bài Viết                             </a></li>
          <li><a href={{url('admin/delete')}}> <i class="icon-form"></i>Xóa Bài Viết                             </a></li>
          <li><a href={{url('admin/update')}}> <i class="fa fa-bar-chart"></i>Sửa Bài Viết                             </a></li>
          <li><a href={{url('admin/update')}}> <i class="fa fa-bar-chart"></i>Thêm Thể Loại                             </a></li>
          <li><a href={{url('admin/update')}}> <i class="fa fa-bar-chart"></i>Sửa Thể Loại                             </a></li>
          <li><a href={{url('admin/update')}}> <i class="fa fa-bar-chart"></i>Xóa Thể Loại                             </a></li>
          {{-- <li><a href="tables.html"> <i class="icon-grid"></i>Xóa Bài Viết                             </a></li> --}}
       
        </ul>
      </div>
     
    </div>
  </nav>