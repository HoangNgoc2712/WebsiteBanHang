<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller">
<head>
      @include('includes.head')
      <script src="/JS/angular.min.js"></script>
      <script src="/JS/dirPagination.js"></script>
      <script src="/JS/sanphamcontroller.js"> </script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="  catalog-category-view categorypath-mob-smartphone-mob-sony-html category-mob-sony ">
  <div id="page">
    <!-- For version 1,2 -->
   <!-- HEADER -->
   @include('includes.header1')

   <!-- MENU -->
   @include('includes..menu')

    <!-- End for version 4 -->
    <!-- For version 1 , 2 -->
    
    <!--breadcrumbs-->
    <!-- End for version 1, 2 -->
    <!-- BEGIN Main Container col2-left -->
    <div class="main-container col2-left-layout bounceInUp animated">
      <div class="container">
        <div class="row">
          <div class=" col-sm-9 col-sm-push-3 col-xs-12 " >
            <!-- Not For version 3 -->
            <!-- Not For version 3 -->
            <div class="col-main  col-lg-12 col-md-12 col-xs-12">
              <!-- Not For version 3, 4 -->
              <h2 style="color:#12a3eb" class="page-heading"  >
               Sản phẩm
              </h2>
              <!--page-heading-->
              <!-- Not For version 3, 4 -->
              <!-- For version 4 -->
              <div class="top-toolbar"  >
                <div class="toolbar">
                 
                  <!--sorter-->
                  
                  <!--sort-by-->
                  <div class="pager">
                    <!-- BEGIN LIMITER -->
                    <div id="limiter" class="col-3-xxxl col-xl-3 col-lg-4 col-12 form-group" style=" width: 50%; float: right">
                          <label for="search" style="float:left;font-size: 13px; font-weight: normal;" >items per page:</label>
                          <input type="number" style="width: 57px;height:35px " min="1" max="100" class="form-control" ng-model="itemPerPage">
                     
                    </div>
                    <!--limiter-->
                  </div>
                  <!--pager-->
                </div>
                <!--toolbar-->
              </div>
              <!--top-toolbar-->
              <!-- BEGIN CATEGORY PRODUCTS -->
              <div class="category-products " >
                <ul class="products-grid" dir-paginate="p in productTH|filter: timkiem |itemsPerPage:itemPerPage" >
                           
                  <li class="item col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <div class="item-inner">
                      <div class="item-img" >
                        <div class="item-img-info">
                          <a class="product-image" href=""
                            title=""><img class="img-responsive"
                              alt=""
                              src="/image/LapTop/@{{p.anh}}"></a>
                          
                          <!--box-hover-->
                        </div>
                        <!--item-img-info-->
                      </div>
                      <!--item-img-->
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title">
                            <a href="product_detail" ng-click="openDetails(sp.id)" title="">@{{p.ten_sp}} </a>
                          </div>
                          <!--item-title-->
                          <div class="ratings">
                            <div class="rating-box">
                              <div style="width:0%" class="rating"></div>
                            </div>
                          </div>
                          <div class="item-content">
                            <div class="item-price">
                              <div class="price-box">
                                <span class="regular-price">
                                  <span class="price"></span>@{{p.gia |number:0}} đ</span>
                              </div>
                            </div>
                            <div class="action">
                             <a href="product_detail" ng-click="openDetails(sp.id)"> <button type="button" title="Add to Cart"  class="button btn-cart"
                                ><span>Xem chi tiết</span></button></a>
                            </div>
                            <!--action-->
                          </div>
                          <!--item-content-->
                        </div>
                        <!--info-inner-->
                      </div>
                      <!--item-info-->
                    </div>
                    <!--item-inner-->
                  </li>                         
                </ul>
                
              </div>
              <!--category-products-->
              <div class="pagination justify-content-center" style="margin-left: 45%;width: 100%;">
                        
                        <dir-pagination-controls  max-size="3" direction-links="true" boundary-links="true" on-page-change='indexCount(newPageNumber)'>
                        
                       </dir-pagination-controls> 
            
                </div>
            </div>
            <!--col-main-->
          </div>
          <aside class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9 wow bounceInUp animated">
            <!-- BEGIN SIDE-NAV-CATEGORY -->
            <div class="side-nav-categories">
              <div class="block-title">
                MENU</div>
              <!--block-title-->
              <!-- BEGIN BOX-CATEGORY -->
              <div class="box-content box-category">
                <ul>
                  <li>
                    <a class="active" href="../mob-smartphone.html">Dòng sản phẩm</a>
                    <span class="subDropdown minus"></span>
                    <!-- root -->
                    <ul class="level0_2022" style="display:block" ng-repeat="d in dongsanphams">
                      <li class="level1">
                        <a href="getSPDong" ng-click="saveDong(d.id)">
                        @{{d.ten_dong}}
                        </a>
                       
                        <!--level1-->
                      </li>
                      <!--level1-->
                     
                     
                    </ul>
                    <!--level0-->
                    <!--(count($_subcategories) > 0)-->
                  </li>
                  <!--level 0-->
                  <li>
                    <a class="active" href="../mob-smartphone.html">Thương hiệu</a>
                    <span class="subDropdown minus"></span>
                    <!-- root -->
                    <ul class="level0_2022" style="display:block" ng-repeat="d in thuonghieus">
                      <li class="level1">
                        <a href="getSPthuonghieu" ng-click="openDetails (d.id)">
                        @{{d.ten_thuong_hieu}}
                        </a>
                       
                        <!--level1-->
                      </li>
                      <!--level1-->
                     
                     
                    </ul>
                    <!--level0-->
                    <!--(count($_subcategories) > 0)-->
                  </li>
                </ul>
              </div>
              <!--box-content box-category-->
            </div>
            <!--side-nav-categories-->
           
            <!-- <div class="hot-banner"><img src="../../../skin/frontend/rwd/bolt/images/hot-trends-banner.jpg" -->
            
            
           
            
          </aside>
          <!--col-right sidebar-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <!--main-container col2-left-layout-->
    <!-- End for version 4 -->
    <!-- For version 1,2,3 -->
    <!-- For version 1,2 -->
    <!-- Brand Logo -->
    @include('includes.brand');
    <div class="our-features-box">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-xs-12 col-sm-6">
            <div class="feature-box first"><span class="fa fa-truck">&nbsp;</span>
              <div class="content">
                <h3>MIỄN PHÍ VẬN CHUYỂN</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-12 col-sm-6">
            <div class="feature-box"><span class="fa fa-headphones">&nbsp;</span>
              <div class="content">
                <h3>HỖ TRỢ 24/7</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-12 col-sm-6">
            <div class="feature-box"><span class="fa fa-share">&nbsp;</span>
              <div class="content">
                <h3>HỖ TRỢ ĐỔI TRẢ</h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-xs-12 col-sm-6">
            <div class="feature-box last"><span class="fa fa-phone">&nbsp;</span>
              <div class="content">
                <h3>HOTLINE +(84) 987654321</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <!-- BEGIN INFORMATIVE FOOTER -->
      @include('includes.footer1');
      <!--footer-bottom-->
      <!-- BEGIN SIMPLE FOOTER -->
    </footer>
    <!-- End for version 4 -->
  </div>
  <!--page-->
  <!-- Mobile Menu-->
  
</body>

</html>