var app = angular.module('myapp', ['angularUtils.directives.dirPagination']); //tao 1 module
app.controller('sanphamcontroller', function($scope, $http) { //tao 1 controller
    //Begin sort
    $scope.sortcolumn = "id";
    $scope.reverse = true;
    $scope.direct = "Ascending";

    //Khi nhấn button sẽ chuyển đổi chiều sắp xếp
    $scope.Chon = function(d) {
        if ($scope.direct == "Ascending") {
            $scope.reverse = false;
            $scope.direct = "Decreasing";
        } else {
            $scope.reverse = true;
            $scope.direct = "Ascending";
        }
    };

    $scope.timkiem = "";
    $scope.itemPerPage = 8;
    $scope.itemPerPage1 = 4;
    $scope.itemPerPage2 = 9;
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
    $http({
        method: "GET",
        url: "http://localhost:8000/api/blogs"
    }).then(function(response) {
        console.log(response.data);
        $scope.blogs = response.data;
    });


    $http({
        method: "GET",
        url: "http://localhost:8000/api/nhacc"
    }).then(function(response) {
        $scope.nhacc = response.data;
    });

    $http({
        method: "GET",
        url: "http://localhost:8000/api/tskts"
    }).then(function(response) {
        console.log(response.data);
        $scope.tskts = response.data;
    });



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

    //thay doi anh
    $scope.ChangeImage = function(id) {
        var image = document.getElementById(id).getAttribute('src');
        document.getElementById('product-zoom').setAttribute('src', image);
    }

    //Lấy thông số kỹ thuật

    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/LayTSKT/" + id,
        params: {
            MaSP: localStorage.getItem("id_sanpham")
        }

    }).then(function(response) {
        $scope.productTSKT = response.data;
        console.log(response.data);
    }, err => console.log(err));

    $http({
        method: "GET",
        url: "http://localhost:8000/api/products"
    }).then(function(response) {
        console.log(response.data);
        $scope.products = response.data;
    });

    $scope.showmodal = function(id) {
        $scope.id = id;
        if (id == 0) {
            $scope.modalTitle = "Add new product";
            if ($scope.product) {
                $scope.product.ten_sp = "";
                $scope.product.ma_dong = "";
                $scope.product.ma_ncc = "";
                $scope.product.gia = "";
                $scope.product.anh = "";
                $scope.product.anhnho1 = "";
                $scope.product.anhnho2 = "";
                $scope.product.mo_ta = "";
            }

        } else {
            $scope.modalTitle = "Edit product";

            $http({
                method: "GET",
                url: "http://localhost:8000/api/products/" + id
            }).then(function(response) {
                $scope.product = response.data;
                $scope.product.ma_dong = $scope.product.ma_dong + '';
                $scope.product.ma_ncc = $scope.product.ma_ncc + '';

            });
        }
        $('#modelId').modal('show');

    }

    $scope.detail = function(id) {
        $scope.id = id;
        $scope.modalTitle1 = "Thông tin sản phẩm";

        $http({
            method: "GET",
            url: "http://localhost:8000/api/products/" + id
        }).then(function(response) {
            $scope.product = response.data;
            $scope.product.ma_dong = $scope.product.ma_dong + '';
            $scope.product.ma_ncc = $scope.product.ma_ncc + '';

        });
        $('#modelId1').modal('show');
    }





    $scope.deleteClick = function(id) {
        var hoi = confirm("Ban co muon xoa that khong");
        if (hoi) {
            $http({
                method: "DELETE",
                url: "http://localhost:8000/api/products/" + id
            }).then(function(response) {
                $scope.message = response.data;
                location.reload();
                alert("Xóa sản phẩm thành công");
            });
        }
    }
    $scope.saveData = function() {

        if ($scope.id == 0) { // them moi sp

            $scope.product.anh = document.getElementById("img").innerHTML;
            $scope.product.anhnho1 = document.getElementById("img1").innerHTML;
            $scope.product.anhnho2 = document.getElementById("img2").innerHTML;

            $http({
                method: "POST",
                url: "http://localhost:8000/api/products",
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                console.log(response.data);
                location.reload();
                alert("Thêm sản phẩm thành công");
            });
        } else { //sua san pham         
            $scope.product.anh = document.getElementById("img").innerHTML;
            $scope.product.anhnho1 = document.getElementById("img1").innerHTML;
            $scope.product.anhnho2 = document.getElementById("img2").innerHTML;

            $http({
                method: "PUT",
                url: "http://localhost:8000/api/products/" + $scope.id,
                data: $scope.product,
                "content-Type": "application/json"
            }).then(function(response) {
                $scope.message = response.data;
                $scope.product.ma_dong = $scope.ma_dong;
                $scope.product.ma_ncc = $scope.ma_ncc;
                console.log(response.data);
                location.reload();
                alert("Sửa sản phẩm thành công");
            });
        }

    }

    //lấy sản phẩm theo dòng

    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/getSPDong/" + localStorage.getItem("dongsp")

    }).then(function(d) {
        $scope.productDong = d.data;
        console.log($scope.productDong);
    }, err => console.log(err));

    $scope.saveDong = function(dongsp) {
        localStorage.setItem("dongsp", dongsp);
    }

    //sản phẩm theo thương hiệu

    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/listSPTheoTH/" + id
    }).then(function(d) {
        $scope.productTH = d.data;
        console.log($scope.productTH);
    }, err => console.log(err));



    //sản phẩm ban chay

    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/listSPBanChay",
    }).then(function(d) {
        $scope.product1 = d.data;
        console.log($scope.product1);
    }, err => console.log(err));


    //sản phẩm mới

    $http({
        method: "get",
        url: "http://localhost:8000/api/sanpham/listSPMoi",
    }).then(function(d) {
        $scope.productNew = d.data;
        console.log($scope.productNew);
    }, err => console.log(err));


    // $scope.fethCart = function() {
    //     $http({
    //         method: "get",
    //         url: "http://localhost:8000/api/getcart",
    //     }).then(function(d) {
    //         $scope.carts = d.data;
    //         console.log($scope.carts);

    //     });
    // }

    // $scope.addtocart = function(id) {
    //     $http({
    //         method: "get",
    //         url: "http://localhost:8000/api/addcart/" + id,
    //     }).then(function(d) {
    //         $scope.fethCart();
    //     }, err => console.log(err));
    // }
    // chọn sản phẩm đưa vào giỏ hàng
    $scope.addToCart = function() {
        let item = {};
        item.id = $scope.product.id;

        item.image = $scope.product.anh;
        item.name = $scope.product.ten_sp;
        item.quantity = 1;
        item.unit_price = $scope.product.gia;



        var list = JSON.parse(localStorage.getItem('cart')) || [];
        if (list.length === 0) {
            list = [item];
        } else {
            let ok = true;
            for (let x of list) {
                if (x.id == item.id) {
                    x.quantity += item.quantity;
                    ok = false;
                    break;
                }
            }
            if (ok) {
                list.push(item);
            }
        }
        localStorage.setItem('cart', JSON.stringify(list));
        alert("Đã thêm giỏ hàng thành công");
    }
    $scope.Sum = function() {
        $scope.cart = JSON.parse(localStorage.getItem('cart'));
        var s = 0;
        if ($scope.cart != null) {
            $scope.cart.forEach(e => {
                s = s + e.quantity;
            });
        } else {
            s = 0;
        }
        return s;
    }

    // Change quatity
    $scope.changeQuantity = (index) => {
        if (index == 0) {
            if ($scope.quantity > 1)
                $scope.quantity--;
        } else
            $scope.quantity++;
    }


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

});

// app.controller('tsktcontroller', function($scope, $http) { //tao 1 controller



//     $http({
//         method: "get",
//         url: "http://localhost:8000/api/sanpham/LayTSKT/" + $id,
//         params: {
//             MaSP: localStorage.getItem("id_sanpham")
//         }

//     }).then(function(response) {
//         $scope.productTSKT = response.data;
//         console.log(response.data);
//     }, err => console.log(err));


// });
app.controller('mycontroller', function($scope, $http) {
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

});