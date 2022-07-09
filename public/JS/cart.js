var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('mycontroller', function($scope, $http) {

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

    const id_sanpham = localStorage.getItem('chosenId');

    $scope.openDetails = (id_sanpham) => {
        // console.log(id)
        localStorage.setItem('chosenId', id_sanpham);
        // window.open('/detail');
    }
    $scope.saveDong = function(dongsp) {
        localStorage.setItem("dongsp", dongsp);
    }

    $scope.LoadCart = function() {
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
    }
    $scope.LoadCart();

    $scope.Tang = function(sp) {
        var index = $scope.cart.indexOf(sp);
        if (index >= 0) {
            $scope.cart[index].quantity += 1;
        }
        reCaculatioTotalPrice()

        localStorage.setItem('cart', JSON.stringify($scope.cart));
    }

    $scope.total = 0;

    function reCaculatioTotalPrice() {
        let total = 0;
        if ($scope.cart == null) {
            $scope.cart = [];
        }
        $scope.cart.forEach(e => {
            total += e.unit_price * e.quantity
        });


        $scope.total = total;


    }
    reCaculatioTotalPrice()

    $scope.Giam = function(sp) {
        var index = $scope.cart.indexOf(sp);
        if (index >= 0 && $scope.cart[index].quantity >= 2) {
            $scope.cart[index].quantity -= 1;
        }
        reCaculatioTotalPrice()

        localStorage.setItem('cart', JSON.stringify($scope.cart));
    }



    $scope.Xoa = function(sp) {
        var index = $scope.cart.indexOf(sp);
        $scope.cart.splice(index, 1);
        localStorage.setItem('cart', JSON.stringify($scope.cart));
        reCaculatioTotalPrice()

        alert("Đã xóa sản phẩm thành công");
    }

    $scope.XoaCart = function() {
        localStorage.setItem('cart', null);
        location.reload();
    }

    //chi tiết sản phẩm
    const id = localStorage.getItem('chosenId');

    $scope.openDetails = (id) => {
        // console.log(id)
        localStorage.setItem('chosenId', id);
        // window.open('/detail');
    }

    $http({
        method: "get",
        url: "http://localhost:8000/api/products/" + id,
        params: {
            ProductName: localStorage.getItem("ten_sp")
        }
    }).then(function(response) {
        $scope.product = response.data;
    }, err => console.log(err));

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
            $scope.kh = response.data.users_name;
            console.log($scope.kh);
            $scope.dangnhap = $scope.kh;
            $scope.test = true;
        });
    }

    //Đăng xuất
    $scope.dangxuat = function() {
        sessionStorage.removeItem("kh");
        location.reload();
    }

    $scope.KiemTraDangNhap = function() {
        $scope.test = false;
        $scope.kh = "";
        if (sessionStorage.getItem("kh") == null) {
            window.location.assign("http://127.0.0.1:8000/index/login")
        } else {
            window.location.assign("http://127.0.0.1:8000/index/checkout")
        }
    }

});