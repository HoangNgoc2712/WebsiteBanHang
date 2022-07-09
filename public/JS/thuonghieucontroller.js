var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('thuonghieucontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem="";
    $scope.itemPerPage=3;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber){

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/thuonghieus"
    }).then(function(response) {
        $scope.thuonghieus = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new category";
            if ($scope.thuonghieu){
                $scope.thuonghieu.ten_thuong_hieu="";
            }
           
        } else {
            $scope.modalTitle = "Edit category";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/thuonghieus/" + id
            }).then(function(response) {
                $scope.thuonghieu = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/thuonghieus/" + id
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
                url: "http://localhost:8000/api/thuonghieus",
                data: $scope.thuonghieu,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/thuonghieus/" + $scope.id,
                data: $scope.thuonghieu,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});