<!DOCTYPE html>
<html lang="en" ng-app="myapp"  ng-controller="sanphamcontroller" >

<head>
  @include('includes.head')
  <link rel="stylesheet" href="/thongbao.css"/>

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
                <div id="main">
                    <div class='success'>
                        <div class="content1">
                            <i class="fa fa-check-circle"></i><br/>
                            <label>ĐẶT HÀNG THÀNH CÔNG</label>
                            <!--<p>Mã số đơn hàng của bạn là <a href="#">LTX0123456</a></p> -->
                            <!-- <p>Bạn có thể xem chi tiết đơn hàng trong <a href="#">đơn mua</a></p> -->
                            <p>Cảm ơn bạn đã đặt hàng tại Laptop Store!</p>
                            <p>Chúc bạn một ngày tốt lành!</p>
                        <a href="/index/trangchu"> <input type="button" value="Về trang chủ"/></a> 
                        </div>
                    
                    </div>
                    
                    <div style="clear: both"></div>			
				

			    </div>
            </div>
    </div>
    <!--col1-layout-->
    <!-- For version 1,2 -->
    <!-- Related Products -->
   
    <!-- Brand Logo -->
   <!-- Brand Logo -->
   


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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <!-- <script type="text/javascript" src="http://mas1.magikthemes.com/js/prototype/prototype.js"></script>
      <script type="text/javascript" src="http://mas1.magikthemes.com/js/varien/js.js"></script> -->
  <!-- Mobile Menu-->
</body>

</html>