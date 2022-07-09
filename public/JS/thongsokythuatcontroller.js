var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('thongsokythuatcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.itemPerPage = 5;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber) {

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }

    $http({
        method: "GET",
        url: "http://localhost:8000/api/products"
    }).then(function(response) {
        console.log(response.data);
        $scope.products = response.data;
    });

    $http({
        method: "GET",
        url: "http://localhost:8000/api/tskts"
    }).then(function(response) {
        console.log(response.data);
        $scope.tskts = response.data;
    });

    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new tskt";
            if ($scope.tskt) {
                $scope.tskt.id_sanpham = "";
                $scope.tskt.cpu = "";
                $scope.tskt.ram = "";
                $scope.tskt.bo_nho = "";
                $scope.tskt.ma_hinh = "";
                $scope.tskt.trong_luong = "";
                $scope.tskt.pin = "";
            }

        } else {
            $scope.modalTitle = "Edit tskt";

            $http({
                method: "GET",
                url: "http://localhost:8000/api/tskts/" + id
            }).then(function(response) {
                $scope.tskt = response.data;
                $scope.tskt.id_sanpham = $scope.tskt.id_sanpham + '';

            });
        }
        $('#modelId').modal('show');

    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/tskts/" + id
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
                url: "http://localhost:8000/api/tskts",
                data: $scope.tskt,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham         
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/tskts/" + $scope.id,
                data: $scope.tskt,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                $scope.tskt.id_sanpham = $scope.id_sanpham;
                console.log(response.data);
                location.reload();

            });
        }

    }

    const id_sanpham = localStorage.getItem('chosenId');
    //Lấy thông số kỹ thuật

    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/LayTSKT/" + id_sanpham,
        params: {
            MaSP: localStorage.getItem("id_sanpham")
        }

    }).then(function(response) {
        $scope.productTSKT = response.data;
        console.log(response.data);
    }, err => console.log(err));
});