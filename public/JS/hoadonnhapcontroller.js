var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('hoadonnhapcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.itemPerPage = 3;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber) {

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/employees"
    }).then(function(response) {
        console.log(response.data);
        $scope.employees = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/nhacc"
    }).then(function(response) {
        $scope.nhacc = response.data;
    });
    $http({
        method: "GET",
        url: "http://localhost:8000/api/hdnhaps"
    }).then(function(response) {
        $scope.hdnhaps = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new bills_nhap";
            if ($scope.hdnhap) {
                $scope.hdnhap.ma_ncc = "";
                $scope.hdnhap.ma_nv = "";
                $scope.hdnhap.ngay_nhap = "";
                $scope.hdnhap.tong_tien = "";
                $scope.hdnhap.hinh_thuc_thanh_toan = "";
                $scope.hdnhap.note = "";
            }

        } else {
            $scope.modalTitle = "Edit bills_nhap";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/hdnhaps/" + id
            }).then(function(response) {
                $scope.hdnhap = response.data;
                $scope.hdnhap.ma_ncc = $scope.hdnhap.ma_ncc + '';
                $scope.hdnhap.ma_nv = $scope.hdnhap.ma_nv + '';
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/hdnhaps/" + id
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
                url: "http://localhost:8000/api/hdnhaps",
                data: $scope.hdnhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/hdnhaps/" + $scope.id,
                data: $scope.hdnhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                $scope.hdnhap.ma_ncc = $scope.ma_ncc;
                $scope.hdnhap.ma_nv = $scope.ma_nv;
                console.log(response.data);
                location.reload();

            });
        }
    }

    //Thêm cthd
    $scope.showmodal1 = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new cthd_nhap";
            if ($scope.cthdnhap) {
                $scope.cthdnhap.ma_hdn = "";
                $scope.cthdnhap.ma_sp = "";
                $scope.cthdnhap.so_luong = "";
                $scope.cthdnhap.don_gia = "";
                $scope.cthdnhap.thanh_tien = "";


            } else {
                $scope.modalTitle = "Edit bills_nhap";
                $http({
                    method: "GET",
                    url: "http://localhost:8000/api/cthdnhaps/" + id
                }).then(function(response) {
                    $scope.cthdnhap = response.data;
                    $scope.cthdnhap.ma_hdn = $scope.cthdnhap.ma_hdn + '';
                });
            }
            $('#modelId2').modal('show');
        }
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/products"
    }).then(function(response) {
        console.log(response.data);
        $scope.products = response.data;
    });

    //Lưu cthd
    $scope.saveData1 = function() {
        if ($scope.id == 0) { //dang them moi sp
            $http({
                method: "POST",
                url: "http://localhost:8000/api/cthdnhaps",
                data: $scope.cthdnhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/cthdnhaps/" + $scope.id,
                data: $scope.cthdnhap,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                $scope.hdnhap.ma_ncc = $scope.ma_ncc;
                $scope.hdnhap.ma_nv = $scope.ma_nv;
                console.log(response.data);
                location.reload();

            });
        }
    }


    const id = localStorage.getItem('chosenId');
    //Lấy chi tiết hóa đơn
    $scope.Billsdetail = function(id) {
        $scope.id = id;
        $scope.modalTitle1 = "Chi tiết hóa đơn nhập";
        $http({
            method: "get",
            url: "http://localhost:8000/api/hoadonnhap/LayCTHDNhap/" + id,
            params: {
                MaHD: localStorage.getItem("ma_hdb")
            }

        }).then(function(response) {
            $scope.CTHDNhap = response.data;
            let total1 = 0;
            $scope.CTHDNhap.forEach(e => {
                total1 += e.don_gia * e.so_luong
            });
            $scope.total = total1;
            console.log(response.data);
        }, err => console.log(err));
        $('#modelId1').modal('show');
    }


});