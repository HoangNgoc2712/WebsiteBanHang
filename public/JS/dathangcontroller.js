var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller("dathangcontroller", function($scope, $rootScope, $http) {
    $http({
        method: "GET",
        url: "http://localhost:8000/api/thuonghieus"
    }).then(function(response) {
        $scope.thuonghieus = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/dongsanphams"
    }).then(function(response) {
        console.log(response.data);
        $scope.dongsanphams = response.data;
    });

    const id = localStorage.getItem('chosenId');

    $scope.openDetails = (id) => {
        // console.log(id)
        localStorage.setItem('chosenId', id);
        // window.open('/detail');
    }
    $scope.saveDong = function(dongsp) {
        localStorage.setItem("dongsp", dongsp);
    }


    //Lấy thông tin giỏ hàng    
    $scope.cart = JSON.parse(localStorage.getItem('cart'));
    console.log($scope.carts);
    let total1 = 0;
    $scope.cart.forEach(e => {
        total1 += e.unit_price * e.quantity
    });
    $rootScope.total = total1;



    //Đăng nhập
    $scope.test = false;
    $scope.kh = "";
    if (sessionStorage.getItem("kh") == null) {
        $scope.dangnhap = "Đăng nhập";
    } else {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/kh/" + sessionStorage.getItem("kh")
        }).then(function(response) {
            $scope.kh = response.data;
            console.log($scope.kh);
            $scope.dangnhap = $scope.kh.users_name;
            $scope.test = true;
        });
    }

    //Đăng xuất
    $scope.dangxuat = function() {
        sessionStorage.removeItem("kh");
        location.reload();
    }



    //đặt hàng
    $rootScope.customer = null;
    $scope.id = JSON.parse(sessionStorage.getItem("kh"));

    // lấy thông tin khách hàng
    if ($scope.id) {
        $http({
            method: "GET",
            url: "http://localhost:8000/api/kh/" + $scope.id
        }).then(function(response) {
            $scope.customer = response.data;
            // console.log($scope.customer);
        }, err => console.log(err));
    }

    $scope.dathang = () => {
        const order = {
            ma_kh: $scope.id,
            tong_tien: $rootScope.total,
            ten_nguoinhan: $scope.customer.ten_kh,
            sdt_nhan: $scope.customer.sdt,
            diachi_nhan: $scope.customer.dia_chi,
            details: $scope.cart,
        };

        $http({
            method: "POST",
            url: "http://localhost:8000/api/hdbans/",
            data: order
        }).then(res => {
            localStorage.removeItem('cart');
            location.href = "/index/thongbao"
                //alert("Đặt hàng thành công");
        }, err => console.log(err));
    }




});