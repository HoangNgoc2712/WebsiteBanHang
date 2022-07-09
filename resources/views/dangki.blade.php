<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="kh">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Đăng kí</title>

    <!-- Custom fonts for this template-->
    <link href="/Admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/Admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary" style="background-image: url('/image/nen.png')">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block"><i style="font-size: 250px; color:#79bdcf; padding: 130px" class="fas fa-user"></i></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Tạo tài khoản</h1>
                            </div>
                            
                            <form class="user">
                               
                                <div class="form-group"">
                                    <input type="text" class="form-control form-control-user" id="exampleFirstName" ng-model='ten_kh' placeholder="Họ và tên">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"  ng-model='dia_chi' placeholder="Địa chỉ">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleInputEmail"  ng-model='sdt' placeholder="Số điện thoại">
                                    </div>
                                    <div class="col-sm-6">
                                         <input type="text" class="form-control form-control-user" id="exampleInputEmail"  ng-model='email' placeholder="Email">
                                    </div>
                                </div>
                               

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"  ng-model='tk' placeholder="Tên tài khoản">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"  ng-model='mk' placeholder="Nhập mật khẩu">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword"  ng-model='mk2' placeholder="Nhập lại mật khẩu">
                                    </div>
                                </div>
                                <a href="" ng-click="dangky(tk)" class="btn btn-primary btn-user btn-block">
                                    Tạo tài khoản
                                </a>
                                <hr>
                                
                            </form>
                            
                            
                            <div class="text-center">
                                <a class="small" href="/index/login">Bạn có tài khoản? Đăng nhập!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <!-- Bootstrap core JavaScript-->
        <script src="/Admin/vendor/jquery/jquery.min.js"></script>
    <script src="/Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/Admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/Admin/js/sb-admin-2.min.js"></script>
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/dirPagination.js"></script>
    <script src="/JS/khachhangcontroller.js"></script>
  
</body>

</html>
