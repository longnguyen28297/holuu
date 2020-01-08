<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Trang quản trị website họ Lưu</title>
  

  <base href="{{asset('')}}">
  <!-- Custom fonts for this template-->
  <link href="resources/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- ckeditor -->
  <script src="{!!asset('public/ckeditor/ckeditor.js') !!}"></script>
  <script src="{!!asset('public/ckeditor/ckfinder/ckfinder.js') !!}"></script>
  <!-- Page level plugin CSS-->
  <link href="resources/admin/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="resources/admin/css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">
  @if(Auth::check())
  <?php $user=Auth::user();?>
  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="{{asset('admin/')}}"><i class="fas fa-home"></i>&nbsp;<span>Chào {{$user->name}} </span></a>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="badge badge-danger">{{$topic_censor->count()}}</span>
          <i class="fas fa-bell fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right alert-dark" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="{{asset('admin/bai-viet-chua-duyet')}}">Có {{$topic_censor->count()}} bài viết chưa duyệt!</a>
          <div class="dropdown-divider"></div>
          @foreach($topic_censor->take(5) as $topic)
          <a class="dropdown-item" href="{{asset('admin/detail_content')}}/{{$topic->slug}}"><img width="50px" src="{{asset('public/images')}}/{{$topic->images}}" alt="">&nbsp;{{$topic->title}}</a>
          <div class="dropdown-divider"></div>
          @endforeach
          <a class="dropdown-item text-center" href="{{asset('admin/bai-viet-chua-duyet')}}">Xem tất cả</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>

        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{asset('admin/infoUser')}}">Thông tin</a>
          <a class="dropdown-item" href="{{asset('admin/changePassword')}}">Đổi mật khẩu</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Đăng xuất</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{asset('admin')}}">
          <i class="fas fa-user-lock"></i>
          <span>@can('admin'){{'Quản trị viên'}}@endcan @cannot('admin'){{'Cộng tác viên'}}@endcannot</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('admin')}}/new_topic">
          <i class="fas fa-pen-alt"></i>
          <span>Viết bài</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('admin')}}/topic">
          <i class="fas fa-list-alt"></i>
          <span>Danh sách bài viết</span></a>
      </li>
      @can('admin')
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-plus-square"></i>
          <span>Thêm mới</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{asset('admin')}}/new_tags">Thẻ</a>
          <a class="dropdown-item" href="{{asset('admin')}}/new_indexing">Đầu mục</a>
          <a class="dropdown-item" href="{{asset('admin')}}/new_city">Thành phố</a>
          <a class="dropdown-item" href="{{asset('admin')}}/new_link">Liên kết</a>
          <a class="dropdown-item" href="{{asset('admin')}}/new_videos">Video</a>
         
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-list"></i>
          <span>Danh sách</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{asset('admin')}}/tags">Thẻ</a>
          <a class="dropdown-item" href="{{asset('admin')}}/indexing">Đầu mục</a>
          <a class="dropdown-item" href="{{asset('admin')}}/list_images">Hình ảnh</a>
          <a class="dropdown-item" href="{{asset('admin')}}/city">Thành phố</a>
          <a class="dropdown-item" href="{{asset('admin')}}/link">Liên kết</a>
          <a class="dropdown-item" href="{{asset('admin')}}/videos">Video</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('admin')}}/info">
          <i class="fas fa-info-circle"></i>
          <span>Thông tin liên hệ</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('admin')}}/banner">
          <i class="fas fa-info-circle"></i>
          <span>Ảnh bìa</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{asset('admin')}}/banner_slider">
          <i class="fas fa-info-circle"></i>
          <span>Ảnh bìa trang chủ</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-users"></i>
          <span>Tài khoản</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="{{asset('admin/listUser')}}">Danh sách tài khoản</a>
          <a class="dropdown-item" href="{{asset('admin/register')}}">Thêm mới tài khoản</a>
        </div>
      </li>
      @endcan
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
        @yield('adminCont')
      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Xác nhận đăng xuất</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Bấm đăng xuất để nếu bạn chắc chắn. Bấm hủy để hủy bỏ.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
          <a class="btn btn-primary" href="{{asset('admin/logout')}}">Đăng xuất</a>
        </div>
      </div>
    </div>
  </div>
@else
@yield('login')
@endif
  <!-- Bootstrap core JavaScript-->
  <script src="resources/admin/vendor/jquery/jquery.min.js"></script>
  <script src="resources/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="resources/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="resources/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="resources/admin/vendor/datatables/jquery.dataTables.js"></script>
  <script src="resources/admin/vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="resources/admin/js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="resources/admin/js/demo/datatables-demo.js"></script>
  <script src="resources/admin/js/demo/chart-area-demo.js"></script>

</body>

</html>
