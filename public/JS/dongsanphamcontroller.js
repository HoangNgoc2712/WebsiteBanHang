var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('dongsanphamcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem = "";
    $scope.itemPerPage = 3;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber) {

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage - 1);
    }
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
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new category";
            if ($scope.dongsp) {
                $scope.dongsp.ten_dong = "";
            }

        } else {
            $scope.modalTitle = "Edit category";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/dongsanphams/" + id
            }).then(function(response) {
                $scope.dongsp = response.data;
                $scope.dongsp.ma_thuong_hieu = $scope.dongsp.ma_thuong_hieu + '';

            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/dongsanphams/" + id
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
                url: "http://localhost:8000/api/dongsanphams",
                data: $scope.dongsp,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/dongsanphams/" + $scope.id,
                data: $scope.dongsp,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                $scope.dongsp.ma_thuong_hieu = $scope.ma_thuong_hieu;
                console.log(response.data);
                location.reload();

            });
        }
    }
    $scope.DSSPDong = function(id) {
        $http({
            method: "get",
            url: "listSPTheoDong/" + id,
        }).then(function(response) {
            $scope.productDong = response.data;
            console.log(response.data);
        }, err => console.log(err));
    }
});