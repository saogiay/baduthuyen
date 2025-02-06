<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <base href="{{asset('')}}">
        <link rel="stylesheet" href="css/backend/bootstrap.min.css">
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/backend/ionicons.min.css">
        <link rel="stylesheet" href="css/backend/AdminLTE.css">
        <link rel="stylesheet" href="css/backend/_all-skins.min.css">
        <link rel="stylesheet" href="css/backend/morris.css">
        <link rel="stylesheet" href="css/backend/style.css">
    </head>
    <body class="hold-transition login-page">

      <div class="login-box">
      <div class="login-logo">
        <a><b>Login</b></a>
        <!-- <a><b><img src="images/logo.png" class="img-responsive"></b></a> -->
      </div>
      <!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg"></p>
        @if(count($errors) > 0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $item)
              {{$item}}<br>
            @endforeach
          </div>
        @endif
          @if(session('thongbao'))
            {{session('thongbao')}}
          @endif
        <form action="" method="POST">
          @csrf
          <div class="form-group has-feedback">
            <input name="email" type="email" class="form-control" placeholder="Email" required="">
            <span class="fa fa-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input name="password" type="password" class="form-control" placeholder="Password" required="">
            <span class="fa fa-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">

            </div>
            <!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-box-body -->
      </div>
      <!-- /.login-box -->
      <!-- ./wrapper -->


      <script src="js/backend/jquery.min.js"></script>
      <script src="js/backend/moment.min.js"></script>
      <script src="js/backend/bootstrap.min.js"></script>
      <script src="js/backend/raphael.min.js"></script>
      <script src="js/backend/morris.min.js"></script>
      <script src="js/backend/adminlte.min.js"></script>
      <script src="ckeditor/ckeditor.js"></script>
      <script src="js/backend/demo.js"></script>
      <script src="js/backend/custom.js"></script>
    </body>
</html>