var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('blogcontroller', function($scope, $http) { //tao 1 controller
    $scope.timkiem="";
    $scope.itemPerPage=2;
    $scope.serial = 1;
    $scope.indexCount = function(newPageNumber){

        $scope.serial = newPageNumber * $scope.itemPerPage - ($scope.itemPerPage-1);
    }
    
    $http({
        method: "GET",
        url: "http://localhost:8000/api/blogs"
    }).then(function(response) {
        console.log(response.data);
        $scope.blogs = response.data;
    });
    const id = localStorage.getItem('chosenId');

    $scope.openDetails = (id) => {
        // console.log(id)
        localStorage.setItem('chosenId', id);
        // window.open('/detail');
    }
    $http({
        method: "get",
        url: "http://localhost:8000/api/blogs/" + id,
        params:{
            blogName: localStorage.getItem("tieu_de")
        }
    }).then(function(response) {
        $scope.blog = response.data;
        console.log(response.data);
    }, err=>console.log(err));


    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new blog";
            if ($scope.blog){
                $scope.blog.tieu_de="";
                $scope.blog.noi_dung="";
                $scope.blog.anh="";
           }
            
        } else {
            $scope.modalTitle = "Edit blog";
            $http({
                method: "GET",
                url: "http://localhost:8000/api/blogs/" + id
            }).then(function(response) {
                $scope.blog = response.data;
            });
        }
        $('#modelId').modal('show');
    }
    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/blogs/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
            });
        }
    }
    $scope.saveData = function() {
        if ($scope.id == 0) { //dang them moi sp
            $scope.blog.anh=document.getElementById("img").innerHTML;
            $http({
                method: "POST",
                url: "http://localhost:8000/api/blogs",
                data: $scope.blog,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        } else { //sua san pham
            $scope.blog.anh=document.getElementById("img").innerHTML;
            $http({
                method: "PUT",
                url: "http://localhost:8000/api/blogs/" + $scope.id,
                data: $scope.blog,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();

            });
        }
    }
});