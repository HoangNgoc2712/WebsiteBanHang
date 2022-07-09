<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="mycontroller" >

<head>
  @include('includes.head')
  
</head>

<body class="  catalog-product-view catalog-product-view product-konnect-elite-sense categorypath-mob-smartphone-mob-sony-mob-xperia-dual-html category-mob-xperia-dual ">
  <div id="page">
  
    <!-- For version 1,2 -->
    <!-- HEADER -->
   
      @include('includes.header1')

      <!-- END HEADER -->
      <!-- MENU -->
      @include('includes.menu')
  
    <!-- END MENU -->
    <!-- End for version 4 -->
    <!-- For version 1,2 -->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul>
              <li class="home">
                <a href="" title="Go to Home Page">Trang chủ</a>

                <span>/Giỏ hàng</span>
              </li>
              
            </ul>
          </div>
          <!--col-xs-12-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
    <!--breadcrumbs-->
    <!-- End for version 3 -->
    <!-- BEGIN Main Container -->
    <div class="main-container col1-layout" >

         <!-- Exclude from version 3 -->
         <div class="main container">
            <div class="cart">

               <!-- Exclude from version 3 -->
               <div class="page-title">
                  <h2>GIỎ HÀNG</h2>
               </div>
               <!--page-title-->

               <div class="table-responsive">
                  <form action="http://mas1.magikthemes.com/index.php/bolt/checkout/cart/updatePost/" method="post">
                     <input name="form_key" type="hidden" value="FRDYobQwz7WE6HIW" />
                     <fieldset>
                        <table id="shopping-cart-table" class="data-table cart-table">
                           
                           <thead>
                              <tr>
                                 <th rowspan="1">&nbsp;</th>
                                 <th rowspan="1"><span class="nobr">Tên sản phẩm</span></th>
                                 <th class="a-center" colspan="1"><span class="nobr">Đơn giá</span></th>
                                 <th rowspan="1" class="a-center">Số lượng</th>
                                 <th class="a-center" colspan="1">Thành tiền</th>
                                 <th rowspan="1" class="a-center">&nbsp;</th>
                              </tr>
                           </thead>
                           <tfoot>
                              <tr>
                                 <td colspan="50" class="a-right">
                                    <a href="trangchu">
                                       <button type="button" title="Continue Shopping" class="button btn-continue" >
                                          <span>
                                             <span>Tiếp tục mua sắm</span>
                                          </span>
                                       </button>
                                    </a>                                   
                                 </td>
                              </tr>
                           </tfoot>
                           <tbody>
                              
                              <tr ng-repeat="c in cart track by $index">
                                 <td><a href="" class="product-image"><img
                                          src="/image/LapTop/@{{c.image}}"
                                          width="100px" height="100px" /></a>
                                </td>
                                 <td>
                                    <h2 class="product-name">
                                       <a href="product_detail" ng-click="openDetails(c.id)">@{{c.name}}</a>
                                    </h2>
                                   
                                 </td>

                                 <td class="a-right">
                                    <span class="cart-price">
                                       <span class="price">@{{c.unit_price |number:0}} đ</span>
                                    </span>
                                 </td>
                                 
                                 <td class="a-center">
                                       <div class="input-group mb-3">
                                            <div ng-click="Giam(c)" class="btn btn-sm" ><i class="fa fa-minus"></i></div>               
                                            <input type="text" value="@{{c.quantity}}"  style="width: 30px; text-align: center; font-size: 15px; font-weight: 400; height: 30px;">
                                            <div ng-click="Tang(c)" class="btn btn-sm" ><i class="fa fa-plus"></i></div>
                                        </div>
                                 </td>
                                 <td class="a-right">
                                    <span class="cart-price">

                                       <span class="price">@{{c.quantity * c.unit_price | number : 0}} đ</span>
                                    </span>
                                 </td>
                                 <td class="product-remove">
                                        <a href=""><i class="fa fa-times-circle"
                                                ng-click="Xoa(c)" aria-hidden="true"></i></a>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                        <script type="text/javascript">decorateTable('shopping-cart-table')</script>
                     </fieldset>
                  </form>
               </div>
               <!--table-responsive-->

                <!-- BEGIN CART COLLATERALS -->
                <div class="cart-collaterals row">
                 
                 <!--col-sm-4-->
                 <div class="col-sm-4" style="float:right" >
                    <div class="totals">
                       
                       <div class="inner">

                          <table id="shopping-cart-totals-table" class="table shopping-cart-table-total">
                             <col />
                             <col width="1" />
                             <tfoot>
                                <tr>
                                   <td class="a-left" colspan="1">
                                      <strong>Tổng Tiền</strong>
                                   </td>
                                   <td class="a-right">
                                      <strong><span class="price"> @{{total |number : 0 }} đ</span></strong>
                                   </td>
                                </tr>
                             </tfoot>
                             
                          </table>

                          <ul class="checkout">
                             <li>
                                <a ><button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout"
                                   ng-click="KiemTraDangNhap()"><span>ĐẶT HÀNG</span></button></a>
                             </li><br />
                             
                          </ul>
                       </div>
                       <!--inner-->
                    </div>
                    <!--totals-->
                 </div>
                 <!--col-sm-4-->
              </div>
               
               <!--cart-collaterals-->
            </div>
            <!--cart-->
            <!-- Exclude from version 3 -->
         </div>
         <!--main container-->

      </div>
    <!--col1-layout-->
    <!-- For version 1,2 -->
    <!-- Related Products -->
   
    <!-- Brand Logo -->
   <!-- Brand Logo -->
   @include('includes.brand');


<!-- end brand logo -->
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
  <!-- FOOTER -->
  @include('includes.footer1');
 <!-- END FOOTER -->
    <!-- End for version 4 -->

  </div>
  <!--page-->
  <script src="/JS/angular.min.js"></script>
      <script src="/JS/dirPagination.js"></script>
      <script src="/JS/sanphamcontroller.js"> </script> 
      <script src="/JS/cart.js"> </script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <!-- <script type="text/javascript" src="http://mas1.magikthemes.com/js/prototype/prototype.js"></script>
      <script type="text/javascript" src="http://mas1.magikthemes.com/js/varien/js.js"></script> -->
  <!-- Mobile Menu-->
</body>

</html>