<!doctype html>
<html class="no-js" lang="en" ng-app="myapp" ng-controller="sanphamcontroller">
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
                    <h2>QU???N L?? S???N PH???M</h2>                  
                </div>
                <!-- Breadcubs Area End Here -->
                <!-- Student Table Area Start Here -->
                <div class="card height-auto">
                    <div class="card-body">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3 >Danh s??ch s???n ph???m</h3>                               
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
                                    <th>???nh</th>
                                    <th>T??n s???n ph???m</th>
                                    <th>D??ng s???n ph???m</th>
                                    <!-- <th>Nh?? cung c???p</th> -->
                                    <th>Gi??</th>
                                    <th>S???a</th>
                                    <th>X??a</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                          
                                    <tr dir-paginate="sp in products|filter: timkiem |itemsPerPage:itemPerPage">
                                        <td>@{{$index+serial}}</td>
                                        <td ng-click="detail(sp.id)"><img src="/image/LapTop/@{{sp.anh}}" style='width:100%' alt=""></td>
                                        <td style="width: 400px; overflow: hidden;text-overflow: ellipsis;line-height: 25px;
                                            -webkit-line-clamp: 3;height: 75px;display: -webkit-box;-webkit-box-orient: vertical;"
                                             ng-click="detail(sp.id)" >@{{sp.ten_sp}}</td>
                                        <td>@{{sp.dongsp.ten_dong}}</td>
                                        <!-- <td>@{{sp.nhacc.ten_ncc}}</td> -->
                                        <td >@{{sp.gia |number:0}} ??</td>
                                        <td><button class="btn btn-info fa fa-pen" style="height:30px; width:30px;" ng-click="showmodal(sp.id)">&nbsp;</button></td>
                                        <td><button class="btn btn-danger fa fa-trash" style="height:30px; width:30px" ng-click="deleteClick(sp.id)">&nbsp;</button></td>
                                
                                    </tr>                                  
                                </tbody>
                            </table>
                            <div class="pagination justify-content-center">
                        
                                <dir-pagination-controls max-size="3" direction-links="true" boundary-links="true" on-page-change='indexCount(newPageNumber)'>
                                    
                                </dir-pagination-controls> 

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Student Table Area End Here -->
             <!-- Modal -->
            <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" >
                            <div class="modal-header">
                                    <h5 class="modal-title">@{{modalTitle}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                            <div class="modal-body">   
                                <div class="col-lg-6 col-md-6 col-sm-12" style="float:left; width:80%">
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">T??n s???n ph???m:</label>
                                            <div>
                                                <input type="text" class="form-control" ng-model="product.ten_sp">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid" class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <div ng-model="product"  > 
                                                <label  class="col-lg-12 col-md-12 col-sm-12" style="padding-left:0px">D??ng s???n ph???m </label>
                                                <br/>
                                                <select style="width:100%;" ng-model='product.ma_dong' class="form-control form-control-lg col-lg-12 col-md-12 col-sm-12" >
                                                    <option value="" selected></option>
                                                    <option ng-repeat="lsp in dongsanphams" value="@{{lsp.id}}">@{{lsp.ten_dong}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid" class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <div ng-model="product" >
                                                <label  class="col-lg-12 col-md-12 col-sm-12" style="padding-left:0px">Nh?? cung c???p</label>
                                                <select style="width:100%;" ng-model='product.ma_ncc'  class="form-control form-control-lg col-lg-12 col-md-12 col-sm-12" >
                                                    <option value=""  selected></option>
                                                    <option ng-repeat="lsp in nhacc" value="@{{lsp.id}}">@{{lsp.ten_ncc}}</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">????n gi??</label>
                                            <div>
                                                <input type="text" class="form-control"  ng-model="product.gia">
                                            </div>
                                        </div>
                                    </div>
                                </div>                     
                                <div  class="col-lg-6 col-md-6 col-sm-12" >
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">???nh</label>
                                            <!-- <form>
                                                <input type="file" id='img' onchange="preview()" ng-model="product.anh">
                                                <img id="thumb" src=""  width="150px"/>
                                            </form> -->
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input "  id="customFile" name="filename" ng-model="product.anh">
                                                <label class="custom-file-label" class="form-control" id='img' for="customFile" >@{{product.anh}}</label>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">???nh Nh??? 1</label>
                                            <!-- <form>
                                                <input type="file" id='img' onchange="preview()" ng-model="product.anh">
                                                <img id="thumb" src=""  width="150px"/>
                                            </form> -->
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input "  id="customFile" name="filename" ng-model="product.anhnho1">
                                                <label class="custom-file-label" class="form-control" id='img1' for="customFile" >@{{product.anhnho1}}</label>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="form-group">
                                            <label for="name">???nh Nh??? 2</label>
                                            <!-- <form>
                                                <input type="file" id='img' onchange="preview()" ng-model="product.anh">
                                                <img id="thumb" src=""  width="150px"/>
                                            </form> -->
                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input "  id="customFile" name="filename" ng-model="product.anhnho2">
                                                <label class="custom-file-label" class="form-control" id='img2' for="customFile" >@{{product.anhnho2}}</label>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                               <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="container-fluid">
                                        <div class="form-group">
                                       
                                            <label for="name">M?? t???</label>
                                            <!-- <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script> -->
                                            <!-- id="description" name="description" -->
                                            <div>
                                                <textarea  style="height: 300px" type="text" class="form-control" ng-model="product.mo_ta">@{{product.mo_ta}}</textarea>
                                            </div>
                                            <!-- <script>
                                                        CKEDITOR.replace( 'description' );
                                            </script> -->

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

<!-- Modal xem ?????y ????? th??ng tin s???n ph???m -->
            <div class="modal fade" id="modelId1" tabindex="-1" role="dialog" aria-labelledby="modelTitleId1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title">@{{modalTitle1}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <div class="modal-body">
                            <div class="col-lg-6 col-md-6 col-sm-12" style="float:left; width:80%">
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">T??n s???n ph???m:</label>
                                        <div>
                                            <input type="text" class="form-control" ng-model="product.ten_sp">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                            <div ng-model="product"  > 
                                                <label  class="col-lg-12 col-md-12 col-sm-12" style="padding-left:0px">D??ng s???n ph???m </label>
                                                <br/>
                                                <select style="width:100%;" ng-model='product.ma_dong' class="form-control form-control-lg col-lg-12 col-md-12 col-sm-12" >
                                                    <option value="" selected></option>
                                                    <option ng-repeat="lsp in dongsanphams" value="@{{lsp.id}}">@{{lsp.ten_dong}}</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>
                                <div class="container-fluid" class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                         <div ng-model="product" >
                                                <label  class="col-lg-12 col-md-12 col-sm-12" style="padding-left:0px">Nh?? cung c???p</label>
                                                <select style="width:100%;" ng-model='product.ma_ncc'  class="form-control form-control-lg col-lg-12 col-md-12 col-sm-12" >
                                                    <option value=""  selected></option>
                                                    <option ng-repeat="lsp in nhacc" value="@{{lsp.id}}">@{{lsp.ten_ncc}}</option>
                                                </select>
                                            </div>
                                    </div>
                                </div>

                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label for="name">????n gi??</label>
                                        <div>
                                            <input type="text" class="form-control"  ng-model="product.gia">
                                        </div>
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label class="col-lg-4 col-md-6 col-sm-6" style="float:left;padding-left:0px" for="name">???nh</label>
                                        <form class="col-lg-8 col-md-6 col-sm-6">
                                            <img id="thumb" src="/image/LapTop/@{{product.anh}}" width="150px"/>
                                        </form>
                                        <!-- <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename" ng-model="product.anh">
                                            <label class="custom-file-label" class="form-control" id='img' for="customFile" >@{{product.anh}}</label>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12" >
                                
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label class="col-lg-4 col-md-6 col-sm-6" style="float:left;padding-left:0px" for="name">???nh nh??? 1</label>
                                        <form class="col-lg-8 col-md-6 col-sm-6">
                                            <img id="thumb" src="/image/LapTop/@{{product.anhnho1}}" width="150px"/>
                                        </form>
                                        <!-- <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename" ng-model="product.anh">
                                            <label class="custom-file-label" class="form-control" id='img' for="customFile" >@{{product.anh}}</label>
                                        </div> -->
                                    </div>
                                </div>
                                <div class="container-fluid">
                                    <div class="form-group">
                                        <label class="col-lg-4 col-md-6 col-sm-6" style="float:left;padding-left:0px" for="name">???nh nh??? 2</label>
                                        <form class="col-lg-8 col-md-6 col-sm-6">
                                            <img id="thumb" src="/image/LapTop/@{{product.anhnho2}}" width="150px"/>
                                        </form>
                                        <!-- <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="customFile" name="filename" ng-model="product.anh">
                                            <label class="custom-file-label" class="form-control" id='img' for="customFile" >@{{product.anh}}</label>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                                <div class="container-fluid col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label for="name">M?? t???</label>
                                        <div>
                                            <textarea style="height: 300px" type="text" class="form-control" ng-model="product.mo_ta">@{{product.mo_ta}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                
                            
                            
                           
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
    <script src="/JS/sanphamcontroller.js"> </script> 
    <script> $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
      });</script>

      <!-- <script> 
        function preview() {
         thumb.src=URL.createObjectURL(event.target.files[0]);
        }
      </script> -->
</body>
</html>