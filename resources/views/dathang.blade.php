<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="dathangcontroller" >

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
  
    <!-- End for version 3 -->
    <!-- BEGIN Main Container -->
    <div class="main-container col2-right-layout">
            <div class="main container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-lg-12">

                        <!-- end for version 2 -->
                        <div class="my-account">

                            <!-- Exclude from version 3 -->
                            <div class="page-title">
                                <h2 style="color:#1eaef5">Checkout</h2>
                            </div>
                            <!--page-title-->

                            <ol class="one-page-checkout" id="checkoutSteps">
                                <li id="opc-login" class="section allow">
                                    <div class="step-title">
                                        <span class="number">1</span>
                                        <h3 class="one_page_heading" style="font-weight: bold;color:#1eaef5">Thông tin khách hàng</h3>
                                    </div>
                                    <div id="checkout-step-login" class="step a-item">
                                        <div class="col2-set">
                                            <div class="col-2">

                                                <form id="login-form" method="post">
                                                    <fieldset>
                                                        <input name="form_key" type="hidden" value="Tg3EmGoieJvG4ZBZ" />

                                                        <ul class="form-list">
                                                            <li>
                                                                <div class="input-box">
                                                                    <label for="login-email">Tên khách hàng</label>
                                                                    <br />
                                                                    <input type="text" class="input-text required-entry validate-email" ng-model="customer.ten_kh" id="login-email" name="login[username]" value="" />
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="input-box">
                                                                    <label for="login-password">Số điện thoại</label>
                                                                    <br />
                                                                    <input type="text" class="input-text required-entry" id="login-password" ng-model="customer.sdt" name="login[password]"  value="" />
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="input-box">
                                                                    <label for="login-password">Địa chỉ nhận hàng</label>
                                                                    <br />
                                                                    <input type="text" class="input-text required-entry" id="login-password" name="login[password]" ng-model="customer.dia_chi"    value=""  />
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <input name="context" type="hidden" value="checkout" />
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </li>
                                <li id="opc-billing" class="section">
                                    <div class="step-title">
                                        <span class="number">2</span>
                                        <h3 class="one_page_heading" style="font-weight: bold;color:#1eaef5">Đơn mua</h3>
                                    </div>
                                    <div id="checkout-step-billing" class="step a-item">

                                        <form id="co-billing-form" action="">
                                            <fieldset class="group-select">
                                                <table class="table table-border text-nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th rowspan="1">&nbsp;</th>
                                                            <th rowspan="1"><span class="nobr">Tên sản phẩm</span></th>
                                                            <th class="a-center" colspan="1"><span class="nobr">Đơn giá</span></th>
                                                            <th rowspan="1" class="a-center">Số lượng</th>
                                                            <th class="a-center" colspan="1">Thành tiền</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr ng-repeat="c in cart track by $index">
                                                            <td>
                                                                <a href=""  style="margin-top: -5px;"class="product-image"><img src="/image/LapTop/@{{c.image}}" width="100px" height="100px" /></a>
                                                            </td>
                                                            <td>
                                                                <h2 class="product-name" style="margin-top: -5px;">
                                                                    <a href="" style="font-family: 'Lato', Sans-Serif;font-size:13px; color: black">@{{c.name}}</a>
                                                                </h2>
                                                            </td>
                                                            <td class="a-right" style="margin-top: 20px;">
                                                                <span class="cart-price">
                                                                <span class="price" style="font-family: 'Lato', Sans-Serif;font-size:13px; color: black">@{{c.unit_price |number:0}} đ</span>
                                                                </span>
                                                            </td>

                                                            <td class="a-center" style="margin-top: 20px;">
                                                                <div class="input-group mb-3" style="font-family: 'Lato', Sans-Serif;font-size:13px; color: black">
                                                                    @{{c.quantity}}
                                                                </div>
                                                            </td>
                                                            <td class="a-right" style="margin-top: 20px;">
                                                                <span class="cart-price">
                         
                                                                <span class="price"  style="font-family: 'Lato', Sans-Serif;font-size:13px; color: black">@{{c.quantity * c.unit_price | number : 0}} đ</span>
                                                                </span>
                                                            </td>

                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </fieldset>
                                        </form>

                                    </div>
                                </li>

                               


                            </ol>

                            <br />

                            <div class="cart-collaterals row">

                                <!--col-sm-4-->
                                <div class="col-sm-4" style="float:right">
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
                                                            <strong><span class="price" style="font: size 20px;"> @{{total |number : 0 }} đ</span></strong>
                                                        </td>
                                                    </tr>
                                                </tfoot>

                                            </table>

                                            <ul class="checkout">
                                                <li>
                                                    <button type="button" title="Proceed to Checkout" class="button btn-proceed-checkout" ng-click="dathang()"><span>ĐẶT HÀNG</span></button>
                                                </li><br />

                                            </ul>
                                        </div>
                                        <!--inner-->
                                    </div>
                                    <!--totals-->
                                </div>
                                <!--col-sm-4-->
                            </div>
                        </div>
                        <!--my-account-->


                        <!-- end for version 2 -->

                    </div>
                    <!-- col-sm-9 col-xs-12 -->

                    <!--col-right sidebar col-sm-3-->
                </div>
            </div>
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
      <script src="/JS/dathangcontroller.js"> </script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <!-- <script type="text/javascript" src="http://mas1.magikthemes.com/js/prototype/prototype.js"></script>
      <script type="text/javascript" src="http://mas1.magikthemes.com/js/varien/js.js"></script> -->
  <!-- Mobile Menu-->
</body>

</html>