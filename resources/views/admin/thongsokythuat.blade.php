<!doctype html>
<html class="no-js" lang="en" ng-app="myapp" ng-controller="thongsokythuatcontroller">
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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/pagination/bootstrap.min.css">

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
                    <h2>QU???N L?? TH??NG S??? K??? THU???T</h2>                  
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3 >Danh s??ch th??ng s??? k??? thu???t</h3>                               
                            </div>
                            
                        </div>
                        <form class="mg-b-20">
                            <div class="row gutters-8">
                                <div class="col-3-xxxl col-xl-3 col-lg-4 col-12 form-group" style="top:7px;">
                                    <label for="search" style="float:left; margin-right:10px;" >items per page:</label>
                                    <input type="number" style="width: 70px;height:35px " min="1" max="100" class="form-control" ng-model="itemPerPage">

                                </div> 
                                <div class="col-4-xxxl col-xl-3 col-lg-4 col-12 form-group" >
                                    <input type="text" ng-model="timkiem"  placeholder="Nh???p t??n c???n t??m ..."  class="form-control">
                                    
                                </div>
                                <div class="col-1-xxxl col-xl-3 col-lg-4 col-12 form-group" style="left:35%;">
                                <button type="submit" class="fw-btn-fill btn-gradient-yellow"ng-click="showmodal(0)" style="width: 120px; height:40px"><i class="fa fa-plus"> ADD NEW</i></button>
                                </div>
                            </div>
                        </form>
                      
                        <div class="table-responsive">
                            <table class="table table-border text-nowrap">
                                <thead>
                                    <tr>
                                    <th>TT</th>
                                    <th>T??n s???n ph???m</th>
                                    <th>H??? ??i???u h??nh</th>
                                    <th>CPU</th>
                                    <th>RAM</th>
                                    <th>B??? nh???</th>
                                    <th>M??n h??nh</th>
                                    <th>Tr???ng l?????ng(kg)</th>
                                    <th>Pin</th>
                                    <th>S???a</th>
                                    <th>X??a</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                          
                                    <tr dir-paginate="sp in tskts|filter: timkiem |itemsPerPage:itemPerPage">
                                        <td>@{{$index+serial}}</td>
                                        <td style="width: 400px; overflow: hidden;text-overflow: ellipsis;line-height: 25px;
                                            -webkit-line-clamp: 3;height: 75px;display: -webkit-box;-webkit-box-orient: vertical;" >@{{sp.spham.ten_sp}}</td>
                                        <td>@{{sp.he_dieu_hanh}}</td>
                                        <td>@{{sp.cpu}}</td>
                                        <td >@{{sp.ram}}</td>
                                        <td >@{{sp.bo_nho}}</td>
                                        <td >@{{sp.man_hinh}}</td>
                                        <td>@{{sp.trong_luong}}</td>
                                        <td>@{{sp.pin}}</td>
                                        <td><button class="btn btn-info fa fa-pen" style="height:30px; width:30px;" ng-click="showmodal(sp.id)">&nbsp;</button></td>
                                        <td><button class="btn btn-danger fa fa-trash" style="height:30px; width:30px" ng-click="deleteClick(sp.id)">&nbsp;</button></td>
                                
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
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <div class="modal-body">
                           
                                <!-- <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">T??n s???n ph???m:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="tskt.ten_sp">
                                        </div>
                                    </div>
                                </div> -->
                                <div class="container-fluid" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div ng-model="tskt"  > 
                                            <label  class="col-lg-4 col-md-6 col-sm-6" style="float:left;padding-left:0px"> S???n ph???m </label>
                                            <select style="width:60%;" ng-model='tskt.id_sanpham' class="form-control form-control-lg col-lg-8 col-md-6 col-sm-6" >
                                                <option value="" selected>Ch???n</option>
                                                <option ng-repeat="lsp in products" value="@{{lsp.id}}">@{{lsp.ten_sp}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12" style="float:left; width:80%">
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">H??? ??i???u h??nh</label>
                                            <div>
                                                <input type="text" class="form-control"  ng-model="tskt.he_dieu_hanh">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">CPU</label>
                                            <div>
                                                <input type="text" class="form-control"  ng-model="tskt.cpu">
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">RAM</label>
                                            <div>
                                                <input type="text" class="form-control"  ng-model="tskt.ram">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">B??? nh???</label>
                                            <div>
                                                <input type="text" class="form-control"  ng-model="tskt.bo_nho">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">M??n h??nh</label>
                                            <div>
                                                <input type="text" class="form-control"  ng-model="tskt.man_hinh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">Tr???ng l?????ng (kg)</label>
                                            <div>
                                                <input type="text" class="form-control"  ng-model="tskt.trong_luong">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">Pin</label>
                                            <div>
                                                <input type="text" class="form-control"  ng-model="tskt.pin">
                                            </div>
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
    <script src="/JS/thongsokythuatcontroller.js"> </script> 
    <script> $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });</script>
</body>
</html>