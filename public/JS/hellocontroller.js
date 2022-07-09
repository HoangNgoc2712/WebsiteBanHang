var app= angular.module ('myapp', []); //tạo module
app.controller ('mycontroller', function($scope){
    $scope.hello="Hello world";
    $scope.datas=JSON.parse('[{"masv":1, "tensv": "Hoang Thi Ngoc"}, {"masv":2, "tensv": "Nguyen Tuyet"},{"masv":3, "tensv": "Do Ly"}]');
});
