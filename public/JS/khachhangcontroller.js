var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('khachhangcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.itemPerPage = 3;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber) {

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/customer"
    }).then(function(response) {
        $scope.customer = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Thêm khách hàng ";
            if ($scope.khach) {
                $scope.khach.ten_kh = "";
                $scope.khach.dia_chi = "";
                $scope.khach.email = "";
                $scope.khach.sdt = "";
                $scope.khach.users_name = "";
                $scope.khach.password = "";
            }

        } else {
            $scope.modalTitle = "Sửa khách hàng ";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/customer/" + id
            }).then(function(response) {
                $scope.khach = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/customer/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/customer",
                data: $scope.khach,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/customer/" + $scope.id,
                data: $scope.khach,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});

app.controller("kh", function($scope, $http, ) {
    $scope.sai = "";
    $scope.kh = {};
    $scope.dangnhap = function(tk, mk) {
        $scope.tk = tk;
        $scope.mk = mk;
        $http({
            method: "GET",
            url: "http://localhost:8000/api/kh1/get/" + $scope.tk + "&" + $scope.mk
        }).then(function(response) {
            sessionStorage.setItem("kh", response.data.id);
            //window.location.back;
            window.location.assign("http://127.0.0.1:8000/index/trangchu")
        }, function() {
            $scope.sai = "Sai tài khoản hoặc mật khẩu ?";
            $scope.tk = "";
            $scope.mk = "";
        });
    }
    $scope.mk1 = function(mk, mk2) {
        if (mk == mk2) {
            $scope.kh.password = mk;
        } else {
            $scope.sai = "Nhập lại mật khẩu?";
        }
    }
    $scope.luu = function(kh) {
        $http({
            method: "POST",
            url: "http://localhost:8000/api/kh",
            data: kh,
            "content-Type": "application/json"
        }).then(function(response) {
            $scope.message = response.data;
            alert("Đăng ký thành công");
            window.location.assign("http://127.0.0.1:8000/index/login")
        });
    }
    $scope.dangky = function(tk) {
        $scope.tk = tk;
        if ($scope.tk != null) {
            $http({
                method: "GET",
                url: "http://localhost:8000/api/kh1/get/" + $scope.tk
            }).then(function(response) {
                $scope.sai = "Tài khoản đã tồn tại?";
                $scope.tk = "";
                $scope.mk = "";
            }, function() {
                $scope.mk1($scope.mk, $scope.mk2);
                $scope.kh.users_name = $scope.tk;
                $scope.kh.ten_kh = $scope.ten_kh;
                $scope.kh.dia_chi = $scope.dia_chi;
                $scope.kh.sdt = $scope.sdt;
                $scope.kh.email = $scope.email;
                console.log($scope.kh);
                $scope.luu($scope.kh);
            });
        } else {
            $scope.sai = "Nhập tài khoản?";
        }
    }
    $scope.sua = function() {
        $scope.sai = "";
    }



});