<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller">

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

                <span>/@{{product.ten_sp}}</span>
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
      <div class="main">
        <div class="container">
          <div class="row">
            <div class="col-main">
              <!-- Endif Next Previous Product -->
              <div class="product-view col-lg-12" itemscope itemtype="http://schema.org/Product" itemid="#product_base">
                <script type="text/javascript">
                  var optionsPrice = new Product.OptionsPrice([]);
                </script>
                <div id="messages_product_view"></div>
                <!-- THÔNG TIN CHÍNH -->
                <div class="product-essential">
                  <form method="post" id="product_addtocart_form">
                    <div class="product-img-box col-lg-4 col-sm-5 col-xs-12">
                      <!-- End for version 3 -->
                      <!-- For version 1,2,4 -->
                      <script src="http://mas1.magikthemes.com/skin/frontend/rwd/bolt/js/cloud-zoom.js"
                        type="text/javascript"></script>
                      <div class="product-image">
                        <div class="product-full">
                          <img itemprop="image" id="product-zoom"
                            src="/image/LapTop/@{{product.anh}}"
                            data-zoom-image="/image/LapTop/@{{product.anh}}"
                           />
                        </div>
                        <!--product-full-->
                        <div class="more-views">
                          <div class="slider-items-products">
                            <div id="gallery_01" class="product-flexslider hidden-buttons product-img-thumb">
                              <div class="slider-items slider-width-col4 block-content">
                                <div class="more-views-items">
                                  <a href=""
                                    data-image="/image/LapTop/@{{product.anh}}"
                                    data-zoom-image="/image/LapTop/@{{product.anh}}">
                                    <img id="one"
                                      src="/image/LapTop/@{{product.anh}}"  ng-click="ChangeImage('one')"/>
                                  </a>
                                </div>
                                <!--more-views-items-->
                                <div class="more-views-items">
                                  <a href=""
                                    data-image="/image/LapTop/@{{product.anhnho1}}"
                                    data-zoom-image="/image/LapTop/@{{product.anhnho1}}">
                                    <img id="two"
                                      src="/image/LapTop/@{{product.anhnho1}}" ng-click="ChangeImage('two')" />
                                  </a>
                                </div>
                                <!--more-views-items-->
                                <div class="more-views-items">
                                  <a href=""
                                    data-image="/image/LapTop/@{{product.anhnho2}}"
                                    data-zoom-image="/image/LapTop/@{{product.anhnho2}}">
                                    <img id="three"
                                      src="/image/LapTop/@{{product.anhnho2}}" ng-click="ChangeImage('three')"/>
                                  </a>
                                </div>
                                
                                
                              </div>
                              <!--slider-items slider-width-col4 block-content-->
                            </div>
                            <!--gallery_01-->
                          </div>
                          <!--slider-items-products-->
                        </div>
                        <!--more-views-->
                      </div>
                      <!--product-image-->
                      <!-- End for version 3 -->
                      <div class="clear"></div>
                    </div>
                    <!-- For version 1,2, 4 -->
                    <div class="product-shop col-lg-8 col-sm-7 col-xs-12">
                      <!-- End for version 3 -->
                      <div class="product-name">
                        <h1 itemprop="name" style="color:#1eaef5"> @{{product.ten_sp}}</h1>
                      </div>
                      <!--product-name-->         
                      <div class="price-block" style="margin-top: 5%">
                        <div class="price-box">
                          <span class="regular-price">
                            <span class="price" > @{{product.gia|number:0}} đ</span> </span>
                        </div>                      
                      </div>
                      <!--price-block-->
                      <div class="add-to-box">


                        <div class="add-to-cart">

                        <!-- <div class="pull-left">  
                          <div class="custom pull-left">                               
                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="fa fa-minus"></i></button>  
                            
                            <input type="text" name="qty" id="qty"  maxlength="12" value="1" title="Quantity:" class="input-text qty" />

                            <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="fa fa-plus"></i></button>  
                                                                                        
                          </div> 
                        </div>      -->
                          <button type="button" title="Add to Cart" class="button btn-cart"
                            ng-click="addToCart()"><span>Thêm vào giỏ hàng</span></button>
                        </div>
                        <!--add-to-cart--> 
                        <div class="email-addto-box">

                          <!-- not For version 4 -->
                                  <p class="email-friend"><a href=""  title="Email to a Friend"><span>Email to a Friend</span></a></p>
                              <!-- End version 4 -->

                            <ul class="add-to-links">
                              
                               <li>
                                <span class="separator">|</span>
                                          
                                    <a class="link-compare" href="" title="Add To Compare" ><span>Add To Compare</span></a>
                                      </li>
                            </ul>  <!--add-to-links-->

                          <!-- End version 4 -->

                        </div>                   
                        <!--email-addto-box-->
                      </div>
                      <!-- Magik Social Share-->
                      <div class="social">      
                          <ul class="link">

                            <li class="fb">
                            <a href="" rel="nofollow" target="_blank" style="text-decoration:none;">
                              
                            </a>
                            </li>

                              <li class="linkedin">
                            <a href="" rel="nofollow" target="_blank" style="text-decoration:none;">
                              
                            </a>
                            </li>

                              <li class="tw">
                            <a href="" rel="nofollow" target="_blank" style="text-decoration:none;">
                              
                            </a>
                            </li>

                              <li class="pintrest">
                            <a href="" rel="nofollow" target="_blank" style="text-decoration:none;">
                              
                            </a>
                            </li>

                              <li class="googleplus">
                            <a href="" rel="nofollow" target="_blank" style="text-decoration:none;">
                              
                            </a>
                            </li>

                          </ul>
                      </div> 
                      <!-- Magik Social Share Close-->
                    </div>
                    <!--product-shop-->
                  </form>
                </div>
                <!--product-essential-->
              </div>
              <!--product-view-->
            </div>
            <!--col-main-->
            <!-- THÔNG SỐ KỸ THUẬT -->
            <div class="product-collateral col-lg-12 col-sm-12 col-xs-12" >
              <!-- Tabs -->
              
              <div class="col-lg-12 col-sm-12 col-xs-12" ng-controller="sanphamcontroller" >
                <div class="tabs">
                  <ul class="nav nav-tabs product-tabs" id="product-detail-tab">
                   
                    <li id="product_tabs_additional" class="tabLink active first"><a href="#">THÔNG SỐ KỸ THUẬT</a></li>
                    
                  </ul>
                </div>
                <!--tabs-->
                <div class="tab-content" id="productTabContent" ng-repeat=" t in productTSKT" >
                 
                  <div id="product_tabs_additional_contents">
                    <div class="product-tabs-content-inner clearfix active">
                      <table class="data-table" id="product-attribute-specs-table">
                        <col width="25%" />
                        <col />
                        <tbody style="font-size:15px">
                          <tr>
                            <th class="label">Hệ điều hành</th>
                            <td class="data">@{{t.he_dieu_hanh}}</td>
                          </tr>
                          <tr>
                            <th class="label">CPU</th>
                            <td class="data"> @{{t.cpu}}</td>
                          </tr>
                          <tr>
                            <th class="label">RAM</th>
                            <td class="data">@{{t.ram}}</td>
                          </tr>
                          <tr>
                            <th class="label">Bộ nhớ</th>
                            <td class="data">@{{t.bo_nho}}</td>
                          </tr>
                          <tr>
                            <th class="label">Màn hình</th>
                            <td class="data">@{{t.man_hinh}}</td>
                          </tr>
                          <tr>
                            <th class="label">Trọng Lượng (kg)</th>
                            <td class="data">@{{t.trong_luong}}</td>
                          </tr>
                          <tr>
                            <th class="label">Pin</th>
                            <td class="data">@{{t.pin}}</td>
                          </tr>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!--tab-content-->

              </div>
              <!--add_info-->            
            </div>
            <!-- MÔ TẢ -->
            <div class="product-collateral col-lg-12 col-sm-12 col-xs-12" >
              <!-- Tabs -->
              <div class="add_info col-lg-12 col-sm-12 col-xs-12" >
                <div class="tabs" >
                  <ul class="nav nav-tabs product-tabs" id="product-detail-tab">
                    <li id="product_tabs_description" class="tabLink active first"><a href="#">MÔ TẢ</a>
                    </li>
                    
                  </ul>
                </div>
                <!--tabs-->

                <div class="tab-content" id="productTabContent" >
                  <div id="product_tabs_description_contents">
                    <div class="product-tabs-content-inner clearfix active">
                      <div class="std" style="font-size:15px"> @{{product.mo_ta}}</div>
                    </div>
                  </div>
                  
                </div>
                <!--tab-content-->

              </div>
              
              <!--add_info-->
            </div>
            <!--product-collateral col-lg-12 col-sm-12 col-xs-12-->
          </div>
          <!--row-->
        </div>
        <!--container-->
      </div>
      <!--main-->
    </div>
    <!--col1-layout-->
    <!-- For version 1,2 -->
    <!-- Related Products -->
    <!-- BEGIN CATEGORY PRODUCTS -->
    <div class="container">
      <div class="related-pro">
        <div class="slider-items-products">
          <div class="related-block">
                <div class="tabs"  style="margin: auto">
                  <ul class="nav nav-tabs product-tabs" id="product-detail-tab">
                    <li id="product_tabs_description" class="tabLink active first"><a href="#">SẢN PHẨM KHÁC</a>
                    </li>
                    
                  </ul>
                </div>
                <br/>
            <div id="related-products-slider" class="product-flexslider hidden-buttons">          
              <!--home-block-inner-->

              <div class="category-products" >

                     <ul class="products-grid" dir-paginate="s in products|filter: timkiem |itemsPerPage:itemPerPage1">
                           
                           <li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6">
                             <div class="item-inner">
                               <div class="item-img" >
                                 <div class="item-img-info">
                                   <a class="product-image" href=""
                                     title=""><img class="img-responsive"
                                       alt=""
                                       src="/image/LapTop/@{{s.anh}}"></a>
                                   
                                   
                                   <!--box-hover-->
                                 </div>
                                 <!--item-img-info-->
                               </div>
                               <!--item-img-->
                               <div class="item-info">
                                 <div class="info-inner">
                                   <div class="item-title">
                                     <a href="product_detail" ng-click="openDetails(s.id)" title="">@{{s.ten_sp}} </a>
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
                                           <span class="price"></span>@{{s.gia |number:0}} đ</span>
                                       </div>
                                     </div>
                                     <div class="action">
                                       <a href="product_detail" ng-click="openDetails(s.id)"> <button type="button" title="Add to Cart"  class="button btn-cart"
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
                <!--item-->              
              </div>
              <!--slider-items slider-width-col4 products-grid-->
            </div>
            <!--product-flexslider hidden-buttons-->

          </div>
          <!--related-block-->
        </div>
        <!--slider-items-products-->
      </div>
      <!--related-pro-->
    </div>
    <!--container-->
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
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
      <!-- <script type="text/javascript" src="http://mas1.magikthemes.com/js/prototype/prototype.js"></script>
      <script type="text/javascript" src="http://mas1.magikthemes.com/js/varien/js.js"></script> -->
  <!-- Mobile Menu-->
</body>

</html>