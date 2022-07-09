var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('hoadonbancontroller', function($scope, $http) { //tao 1 controller
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

    $http({
        method: "GET",
        url: "http://localhost:8000/api/hdbans"
    }).then(function(response) {
        $scope.hdbans = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new ";
            if ($scope.hdban) {
                $scope.hdban.ma_kh = "";
                $scope.hdban.diachi_nhan = "";
                $scope.hdban.ngay_ban = "";
                $scope.hdban.tong_tien = "";
                $scope.hdban.hinh_thuc_thanh_toan = "";
            }

        } else {
            $scope.modalTitle = "Edit ";

            $http({
                method: "GET",
                url: "http://localhost:8000/api/hdbans/" + id
            }).then(function(response) {
                $scope.hdban = response.data;
                $scope.hdban.ma_kh = $scope.hdban.ma_kh + '';


            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/hdbans/" + id
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
                url: "http://localhost:8000/api/hdbans",
                data: $scope.hdban,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/hdbans/" + $scope.id,
                data: $scope.hdban,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                $scope.hdban.ma_kh = $scope.ma_kh;
                console.log(response.data);
                location.reload();

            });
        }
    }




    const id = localStorage.getItem('chosenId');
    //Lấy chi tiết hóa đơn
    $scope.Billsdetail = function(id) {
        $scope.id = id;
        $scope.modalTitle1 = "Chi tiết đơn hàng";
        $http({
            method: "get",
            url: "http://localhost:8000/api/hoadonban/LayCTHDBan/" + id,
            params: {
                MaHD: localStorage.getItem("ma_hdb")
            }

        }).then(function(response) {
            $scope.CTHDBan = response.data;
            let total1 = 0;
            $scope.CTHDBan.forEach(e => {
                total1 += e.don_gia * e.so_luong
            });
            $scope.total = total1;
            console.log(response.data);
        }, err => console.log(err));
        $('#modelId1').modal('show');
    }



});