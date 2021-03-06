<!doctype html>
<html class="no-js" lang="en" ng-app="myapp" ng-controller="hoadonnhapcontroller">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laptop Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/akkhor/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="/akkhor/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="/akkhor/css/main.css">
    <link rel="stylesheet" href="/pagination/bootstrap.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/akkhor/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="/akkhor/css/all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/akkhor/fonts/flaticon.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="/akkhor/css/animate.min.css">
    <!-- Data Table CSS -->
    <link rel="stylesheet" href="/akkhor/css/jquery.dataTables.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/akkhor/style.css">
    <!-- Modernize js -->
    <script src="/akkhor/js/modernizr-3.6.0.min.js"></script>
</head>
<body>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper bg-ash">
        <!-- Header Menu Area Start Here -->
       @include('includes.header')
        <!-- Header Menu Area End Here -->
        <!-- Page Area Start Here -->
        <div class="dashboard-page-one">
            <!-- Sidebar Area Start Here -->
            @include('includes.sidebar')

            <!-- Sidebar Area End Here -->
            <div class="dashboard-content-one">
                <!-- Breadcubs Area Start Here -->
                <div class="breadcrumbs-area">
                    <h2>QU???N L?? H??A ????N NH???P</h2>                  
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Danh s??ch h??a ????n nh???p</h3>
                            </div>
                            
                        </div>

                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group" style="top:7px;">
                                    <label for="search" style="float:left; margin-right:10px;" >items per page:</label>
                                    <input type="number" style="width: 70px;height:35px " min="1" max="100" class="form-control" ng-model="itemPerPage">

                                </div> 
                                <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group" >
                                    <input type="text" ng-model="timkiem"  placeholder="Nh???p t??n c???n t??m ..."  class="form-control">
                                    
                                </div>
                                <div class="col-1-xxxl col-xl-3 col-lg-3 col-12 form-group" style="left:20%;">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow" ng-click="showmodal(0)" style="width: 120px; height:40px"><i class="fa fa-plus"> ADD NEW</i></button>
                                </div>
                                <div class="col-1-xxxl col-xl-3 col-lg-3 col-12 form-group" style="left:10%;">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow" ng-click="showmodal1(0)" style="width: 150px; height:40px"><i class="fa fa-plus"> ADD DETAILS</i></button>
                                </div>

                            </div>
                        </form>
                      
                        <div class="table-responsive">
                            <table class="table table-border text-nowrap">
                                <thead>
                                    <tr>
                                    <th>TT</th>
                                    <th>Nh?? cung c???p</th>
                                    <th>Nh??n vi??n nh???p</th></th>
                                    <th>ng??y nh???p</th>
                                    <th>T???ng ti???n</th>
                                    <th>H??nh th???c thanh to??n</th>
                                    <th>Note</th>
                                    <th>S???a</th>
                                    <th>X??a</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                   
                                    <tr dir-paginate="th in hdnhaps|filter: timkiem |itemsPerPage:itemPerPage">
                                        <td>@{{$index+serial}}</td>
                                        <td ng-click="Billsdetail(th.id)">@{{th.nhacc.ten_ncc}}</td>
                                        <td ng-click="Billsdetail(th.id)">@{{th.nhvien.ten_nv}}</td>
                                        <td>@{{th.ngay_nhap}}</td>
                                        <td>@{{th.tong_tien|number:0}} ??</td>
                                        <td>@{{th.hinh_thuc_thanh_toan}}</td>
                                        <td>@{{th.note}}</td>
                                        <td><button class="btn btn-info fa fa-pen" style="height:30px; width:30px;" ng-click="showmodal(th.id)">&nbsp;</button></td>
                                        <td><button class="btn btn-danger fa fa-trash" style="height:30px; width:30px" ng-click="deleteClick(th.id)">&nbsp;</button></td>
                                
                                    </tr>                                  
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center">
                        
                                <dir-pagination-controls   max-size="3" direction-links="true" boundary-links="true" on-page-change='indexCount(newPageNumber)'>
                                    
                                </dir-pagination-controls> 

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
             <!-- Modal -->
                <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title">@{{modalTitle}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <than aria-hidden="true">&times;</than>
                                            </button>
                                    </div>
                            <div class="modal-body">
                                <div class="container-fluid" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div ng-model="hdnhap"  > 
                                            <label  class="col-lg-4 col-md-6 col-sm-6" style="float:left;padding-left:0px">Nh?? cung c???p</label>
                                            <select style="width:40%;" ng-model='hdnhap.ma_ncc' class="form-control form-control-lg col-lg-8 col-md-6 col-sm-6" >
                                                <option value="" selected>Ch???n</option>
                                                <option ng-repeat="lsp in nhacc" value="@{{lsp.id}}">@{{lsp.ten_ncc}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div ng-model="hdnhap" >
                                            <label  class="col-lg-4 col-md-6 col-sm-6" style="float:left;padding-left:0px">Nh??n vi??n</label>
                                            <select style="width:40%;" ng-model='hdnhap.ma_nv' class="form-control form-control-lg col-lg-8 col-md-6 col-sm-6" >
                                                <option value="" selected>Ch???n</option>
                                                <option ng-repeat="lsp in employees" value="@{{lsp.id}}">@{{lsp.ten_nv}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Ng??y nh???p</label>
                                        <div>
                                            <input type="text" placeholder="yyyy/mm/dd" class="form-control" ng-model="hdnhap.ngay_nhap" >
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">T???ng ti???n</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="hdnhap.tong_tien">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">H??nh th???c thanh to??n</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="hdnhap.hinh_thuc_thanh_toan">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Note</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="hdnhap.note">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" ng-click="saveData()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Modal th??m cthd -->
                <div class="modal fade" id="modelId2" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title">@{{modalTitle}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <than aria-hidden="true">&times;</than>
                                            </button>
                                    </div>
                            <div class="modal-body">
                                <div class="container-fluid" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div ng-model="hdnhap"  > 
                                            <label  class="col-lg-4 col-md-6 col-sm-6" style="float:left;padding-left:0px">H??a ????n nh???p</label>
                                            <select style="width:40%;" ng-model='cthdnhap.ma_hdn' class="form-control form-control-lg col-lg-8 col-md-6 col-sm-6" >
                                                <option value="" selected>Ch???n</option>
                                                <option ng-repeat="lsp in hdnhaps" value="@{{lsp.id}}">@{{lsp.id}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div ng-model="hdnhap" >
                                            <label  class="col-lg-4 col-md-6 col-sm-6" style="float:left;padding-left:0px">S???n ph???m</label>
                                            <select style="width:40%;" ng-model='cthdnhap.ma_sp' class="form-control form-control-lg col-lg-8 col-md-6 col-sm-6" >
                                                <option value="" selected>Ch???n</option>
                                                <option ng-repeat="lsp in products" value="@{{lsp.id}}">@{{lsp.ten_sp}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">S??? l?????ng</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="cthdnhap.so_luong" >
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">????n gi??</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="cthdnhap.don_gia">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">Th??nh ti???n</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="cthdnhap.thanh_tien">
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" ng-click="saveData1()">Save</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal xem chi ti???t h??a ????n -->
                <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                                <div class="modal-header">
                                        <h5 class="modal-title">@{{modalTitle1}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <than aria-hidden="true">&times;</than>
                                            </button>
                                </div>
                                <div class="modal-body">
                                    <table class="table table-border text-nowrap">
                                        <thead>
                                            <tr>
                                                <th rowspan="1">&nbsp;</th>
                                                <th rowspan="1"><span class="nobr">T??n s???n ph???m</span></th>
                                                <th class="a-center" colspan="1"><span class="nobr">????n gi??</span></th>
                                                <th rowspan="1" class="a-center">S??? l?????ng</th>
                                                <th class="a-center" colspan="1">Th??nh ti???n</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="ct in CTHDNhap">
                                                <td>
                                                    <a href=""  style="margin-top: -5px;"class="product-image"><img src="/image/LapTop/@{{ct.anh}}" width="100px" height="100px" /></a>
                                                </td>
                                                <td>
                                                    <h2 class="product-name" style="margin-top: -5px;">
                                                        <a href="" style="font-family: 'Lato', Sans-Serif;font-size:13px; color: black">@{{ct.ten_sp}}</a>
                                                    </h2>
                                                </td>
                                                <td class="a-right" style="margin-top: 20px;">
                                                    <span class="cart-price">
                                                    <span class="price" style="font-family: 'Lato', Sans-Serif;font-size:13px; color: black">@{{ct.don_gia |number:0}} ??</span>
                                                    </span>
                                                </td>

                                                <td class="a-center" style="margin-top: 20px;">
                                                    <div class="input-group mb-3" style="font-family: 'Lato', Sans-Serif;font-size:13px; color: black">
                                                        @{{ct.so_luong}}
                                                    </div>
                                                </td>
                                                <td class="a-right" style="margin-top: 20px;">
                                                    <span class="cart-price">
                
                                                    <span class="price"  style="font-family: 'Lato', Sans-Serif;font-size:13px; color: black">@{{ct.so_luong * ct.don_gia | number : 0}} ??</span>
                                                    </span>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                    <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                                        <col />
                                        <col width="1" />
                                        <tfoot>
                                            <tr>
                                                <td class="a-left" colspan="1" style="width: 83%;">
                                                    <strong>T???ng Ti???n</strong>
                                                </td>
                                                <td class="a-right">
                                                    <strong><span class="price" style="font: size 20px;"> @{{total |number : 0 }} ??</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>

                                    </table>
                                    
                                </div>
                            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              
                            </div>
                        </div>
                    </div>
                </div>
            <script>
                $('#exampleModal').on('show.bs.modal', event => {
                    var button = $(event.relatedTarget);
                    var modal = $(this);
                    // Use above variables to manipulate the DOM

                });
            </script>
               <!-- Footer -->
               @include('includes.footer')

            </div>
        </div>
        <!-- Page Area End Here -->
    </div>
    <!-- jquery-->
    <script src="/akkhor/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="/akkhor/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="/akkhor/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/akkhor/js/bootstrap.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/akkhor/js/jquery.scrollUp.min.js"></script>
    <!-- Data Table Js -->
    <script src="/akkhor/js/jquery.dataTables.min.js"></script>
    <!-- Custom Js -->
    <script src="/akkhor/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="/JS/angular.min.js"></script>
    <script src="/JS/dirPagination.js"></script>
    <script src="/JS/hoadonnhapcontroller.js"> </script> 
</body>
</html>