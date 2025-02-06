<!DOCTYPE html>
<html lang="vi">
	<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Quản trị website</title>
		<base href="{{asset('')}}">
		<link rel="stylesheet" href="css/backend/bootstrap.min.css">
		<link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/backend/ionicons.min.css">
		<link rel="stylesheet" href="css/backend/jquery-ui.css">
		<link rel="stylesheet" href="css/backend/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="css/backend/AdminLTE.css">
		<link rel="stylesheet" href="css/backend/_all-skins.min.css">
		<link rel="stylesheet" href="css/backend/morris.css">
		<link rel="stylesheet" href="css/backend/style.css">
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
		    <header class="main-header">
		        <!-- Logo -->
		        <a href="{{ url('admin/layout/index') }}" class="logo">
		            <!-- mini logo for sidebar mini 50x50 pixels -->
		            <span class="logo-mini"><b>WEB</b></span>
		            <!-- logo for regular state and mobile devices -->
		            <span class="logo-lg">
		                QUẢN TRỊ WEBSITE
		            </span>
		        </a>
		        <!-- Header Navbar: style can be found in header.less -->
		        <nav class="navbar navbar-static-top">
		            <!-- Sidebar toggle button-->
		            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
		                <span class="sr-only">Toggle navigation</span>
		            </a>
		            <div class="navbar-custom-menu">
		                <ul class="nav navbar-nav">
		                    <li class="dropdown user user-menu">
		                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                            <img src="images/user.jpg" class="user-image" alt="User Image">
		                            <span class="hidden-xs">Adminstrator <i class="fa fa-caret-down"></i></span>
		                        </a>
		                        <ul class="dropdown-menu">
		                            <li class="user-footer">
		                                <div class="text-center">
		                                    <a href="myLogin/logout" class="btn btn-default btn-flat">Đăng xuất</a>
		                                </div>
		                            </li>
		                        </ul>
		                    </li>
		                </ul>
		            </div>
		        </nav>
		    </header>
		    <!-- Left side column. contains the logo and sidebar -->
		    <aside class="main-sidebar">
		        <!-- sidebar: style can be found in sidebar.less -->
		        <section class="sidebar">
		            <!-- Sidebar user panel -->
		            <!-- sidebar menu: : style can be found in sidebar.less -->
		            <ul class="sidebar-menu" data-widget="tree">
		                <li>
		                    <a href="{{ url('admin/layout/index') }}"><i class="fa fa-home"></i><span> Trang chủ</span></a>
		                </li>
		                <li>
		                    <a href="{{ url('admin/gioithieu/update/1') }}"><i class="fa fa-info-circle"></i><span> Giới thiệu</span></a>
		                </li>
		                <li class="treeview">
				          	<a href="#">
					            <i class="fa fa-edit"></i>
					            <span>Bài viết</span>
					            <span class="pull-right-container">
					              <i class="fa fa-angle-left pull-right"></i>
					            </span>
				          	</a>
				          	<ul class="treeview-menu" style="display: none;">
					            <li>
				                    <a href="{{ url('admin/danhmucbaiviet/index') }}"><i class="fa fa-table"></i><span> Danh mục</span></a>
				                </li>
				                <li>
				                    <a href="{{ url('admin/baiviet/index') }}"><i class="fa fa-edit"></i><span> Bài viết</span></a>
				                </li>
				          	</ul>
				        </li>
				        <li class="treeview">
				          	<a href="#">
					            <i class="fa fa-edit"></i>
					            <span>Sản phẩm</span>
					            <span class="pull-right-container">
					              <i class="fa fa-angle-left pull-right"></i>
					            </span>
				          	</a>
				          	<ul class="treeview-menu" style="display: none;">
					            <li>
				                    <a href="{{ url('admin/danhmucsanpham/index') }}"><i class="fa fa-table"></i><span> Danh mục sản phẩm</span></a>
				                </li>
				                <li>
				                    <a href="{{ url('admin/sanpham/index') }}"><i class="fa fa-shopping-cart"></i><span> Sản phẩm</span></a>
				                </li>
				          	</ul>
				        </li>
		                <li>
		                    <a href="{{ url('admin/slider/index') }}"><i class="fa fa-picture-o"></i><span> Slider</span></a>
		                </li>
		                <!-- <li>
		                    <a href="{{ url('admin/thongtinlienhe/index') }}"><i class="fa fa-comments"></i><span> Thông tin liên hệ</span></a>
		                </li> -->
		                <li>
		                    <a href="{{ url('admin/cauhinh/update/1') }}"><i class="fa fa-cog"></i><span> Cấu hình</span></a>
		                </li>
		                <li>
		                    <a href="{{ url('admin/cauhinhseo/update/1') }}"><i class="fa fa-rocket"></i><span> Cấu hình seo</span></a>
		                </li>
		                <li>
		                    <a href="{{ url('admin/user/index') }}"><i class="fa fa-users"></i><span> Users</span></a>
		                </li>
		            </ul>
		        </section>
		        <!-- /.sidebar -->
		    </aside>
		    <!-- Content Wrapper. Contains page content -->
		    <div class="content-wrapper">
		        @yield('content')
		    </div>
		    <!-- /.content-wrapper -->
		    <footer class="main-footer">
		        <div class="pull-right hidden-xs">
		            <b>Version</b> 4.0
		        </div>
		        Copyright &copy; 2019
		    </footer>
		</div>
		<!-- ./wrapper -->
		<script src="js/backend/jquery.min.js"></script>
		<script src="js/backend/jquery-ui.js"></script>
		<script src="js/backend/moment.min.js"></script>
		<script src="js/backend/bootstrap.min.js"></script>
		<script src="js/backend/raphael.min.js"></script>
		<script src="js/backend/morris.min.js"></script>
		<script src="js/backend/adminlte.min.js"></script>
		<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
		    <script>
		        // CKEDITOR.replace( 'editor' );
		        $(document).ready(function () {
		            CKEDITOR.replace( 'editor', {
		                filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
		                filebrowserUploadMethod: 'form'
		            });
		        });
		    </script>
		<script src="js/backend/demo.js"></script>
		<script src="js/backend/custom.js"></script>
	</body>
</html>