var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('userscontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem="";
    $scope.itemPerPage=3;
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

    $http({
        method: "GET",
        url: "http://localhost:8000/api/userss"
    }).then(function(response) {
        console.log(response.data);
        $scope.userss = response.data;
    });
    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new user";
            if($scope.users){
                $scope.users.ma_nv = "";
                $scope.users.users_name = "";
                $scope.users.password = "";
                $scope.users.anh = "";
            }
            
        } else {
            $scope.modalTitle = "Edit user";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/userss/" + id
            }).then(function(response) {
                $scope.users = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/userss/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $scope.users.anh=document.getElementById("img").innerHTML;
            $http({
                method: "POST",
                url: "http://localhost:8000/api/userss",
                data: $scope.users,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();
            });
        } else { //sua san pham
            $scope.users.anh=document.getElementById("img").innerHTML;
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/userss/" + $scope.id,
                data: $scope.users,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});