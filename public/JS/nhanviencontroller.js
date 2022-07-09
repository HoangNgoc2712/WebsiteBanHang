var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('nhanviencontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem="";
    $scope.itemPerPage=5;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber){

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    $http({
        method: "GET",
        url: "http://localhost:8000/api/employees"
    }).then(function(response) {
        console.log(response.data);
        $scope.employees = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new employee";
            if($scope.employee){
                $scope.employee.ten_nv= "";
            $scope.employee.gioi_tinh = "";
            $scope.employee.ngay_sinh = "";
            $scope.employee.que_quan = "";
            $scope.employee.sdt = "";
            $scope.employee.email = "";
            $scope.employee.chuc_vu = "";
            }
            
        } else {
            $scope.modalTitle = "Edit employee";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/employees/" + id
            }).then(function(response) {
                $scope.employee = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/employees/" + id
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
                url: "http://localhost:8000/api/employees",
                data: $scope.employee,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/employees/" + $scope.id,
                data: $scope.employee,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});