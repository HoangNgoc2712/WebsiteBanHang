<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="sanphamcontroller" >
<head>
@include('includes.head')
      <script src="/JS/angular.min.js"></script>
      <script src="/JS/dirPagination.js"></script>
      <script src="/JS/sanphamcontroller.js"> </script> 

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- <link rel="stylesheet" type = "text/css"href="/fontawesome/css/all.min.css" /> -->
</head>
<body class="  cms-index-index cms-bolt-home-one " itemscope itemtype="http://schema.org/WebPage">
  <div id="page">
    <!-- For version 1,2 -->
   <!-- HEADER -->
   @include('includes.header1')

   <!-- END HEADER -->
    <!-- MENU -->
    @include('includes..menu')
 

    <!-- END MENU -->
    <!-- End for version 4 -->
   <!-- slide show -->
   @include('includes.slide')
   <!-- end slide show -->
    <!--magik-slideshow-->
    <!-- PHẦN SẢN PHẨM -->
    
    <!--content-page-->
    <div class="std">
     <div class="container">
        <div class="row">
         

          <div class="col-md-9 col-sm-8" style="width: 100%">
            <div class="category-product">
              <div class="navbar nav-menu">
                <div class="navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li>
                      <div class="new_title">
                        <h2 style="color:#12a3eb">GỢI Ý</h2>
                        <hr size='2' width='100%'>

                      </div>
                    </li>
                    
                  </ul>
                </div>
                <!--navbar-collapse-->
              </div>
              <!--navbar nav-menu-->
              <div class="product-bestseller" >
                <div class="product-bestseller-content">
                  <div class="product-bestseller-list">
                    <div class="tab-container">
                      <div id="tab-1" class="tab-panel active">
                        <div class="category-products"  >
                          <ul class="products-grid"  dir-paginate="sp in products|filter: timkiem |itemsPerPage:itemPerPage">
                           
                            <li class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                              <div class="item-inner">
                                <div class="item-img" >
                                  <div class="item-img-info">
                                    <a class="product-image" href=""
                                      title=""><img class="img-responsive"
                                        alt=""
                                        src="/image/LapTop/@{{sp.anh}}"></a>
                                    
                                    <!--box-hover-->
                                  </div>
                                  <!--item-img-info-->
                                </div>
                                <!--item-img-->
                                <div class="item-info">
                                  <div class="info-inner">
                                    <div class="item-title">
                                      <a href="product_detail" ng-click="openDetails(sp.id)" title="">@{{sp.ten_sp}} </a>
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
                                            <span class="price"></span>@{{sp.gia |number:0}} đ</span>
                                        </div>
                                      </div>
                                      <div class="action">
                                        <a href="product_detail" ng-click="openDetails(sp.id)"><button type="button" title="Add to Cart"  class="button btn-cart">Xem chi tiết</button></a>
                                          
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
                          <!--products-grid-->
                        </div>
                        <!--category-products-->
                      </div>
                      <!--tab-1-->
                    </div>
                    <!--tab-container-->
                  </div>
                  <!--product-bestseller-list-->
                </div>
                <!--product-bestseller-content-->
              </div>
              <!--product-bestseller-->
            </div>
            <!--category-product-->
          </div>
          <!--col-md-9 col-sm-8-->
          <!--col-md-3 col-sm-4 hot-deal-->
          <!-- New Products -->
          <div class="col-md-9 col-sm-8" style="width: 100%">
            <div class="category-product">
              <div class="navbar nav-menu">
                <div class="navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li>
                      <div class="new_title">
                        <h2 style="color:#12a3eb">SẢN PHẨM MỚI</h2>
                        <hr size='2' width='100%'>
                      </div>
                    </li>
                    
                  </ul>
                </div>
                <!--navbar-collapse-->
              </div>
              <!--navbar nav-menu-->
              <div class="product-bestseller" >
                <div class="product-bestseller-content">
                  <div class="product-bestseller-list">
                    <div class="tab-container">
                      <div id="tab-1" class="tab-panel active">
                        <div class="category-products"  >
                          <ul class="products-grid" dir-paginate="s in productNew|filter: timkiem |itemsPerPage:itemPerPage1">
                           
                            <li class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
                              <div class="item-inner">
                                <div class="item-img" >
                                  <div class="item-img-info">
                                    <a class="product-image" href=""
                                      title=""><img class="img-responsive"
                                        alt=""
                                        src="/image/LapTop/@{{s.anh}}"></a>
                                    <div class="new-label new-top-left"><span> New </span></div>
                                    
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
                          <!--products-grid-->
                        </div>
                        <!--category-products-->
                      </div>
                      <!--tab-1-->
                    </div>
                    <!--tab-container-->
                  </div>
                  <!--product-bestseller-list-->
                </div>
                <!--product-bestseller-content-->
              </div>
              <!--product-bestseller-->
            </div>
            <!--category-product-->
          </div>
          <!--col-md-9 col-sm-8-->

          <div class="col-md-9 col-sm-8" style="width: 100%">
            <div class="category-product">
              <div class="navbar nav-menu">
                <div class="navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li>
                      <div class="new_title">
                        <h2 style="color:#12a3eb"> SẢN PHẨM BÁN CHẠY</h2>
                        <hr size='2' width='100%'>

                      </div>
                    </li>
                    
                  </ul>
                </div>
                <!--navbar-collapse-->
              </div>
              <!--navbar nav-menu-->
              <div class="product-bestseller" >
                <div class="product-bestseller-content">
                  <div class="product-bestseller-list">
                    <div class="tab-container">
                      <div id="tab-1" class="tab-panel active">
                        <div class="category-products"  >
                          <ul class="products-grid" dir-paginate="s in product1|filter: timkiem |itemsPerPage:itemPerPage1">
                           
                            <li class="item col-lg-3 col-md-4 col-sm-4 col-xs-6">
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
                                        <a href="product_detail" ng-click="openDetails(s.id)"><button type="button" title="Add to Cart" href="product_detail" class="button btn-cart"><span>Xem chi tiết</span></button></a>
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
                          <!--products-grid-->
                        </div>
                        <!--category-products-->
                      </div>
                      <!--tab-1-->
                    </div>
                    <!--tab-container-->
                  </div>
                  <!--product-bestseller-list-->
                </div>
                <!--product-bestseller-content-->
              </div>
              <!--product-bestseller-->
            </div>
            <!--category-product-->
          </div>
        </div>
        <!--row-->
      </div>
     
    </div>
    <!-- Home Lastest Blog Block -->
    <div class="container" >
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="blog-outer-container">
            <div class="new_title">
              <h2 style="color:#12a3eb">BLOG</h2>
            </div><!-- new_title -->
            <div class="blog-inner"  ng-repeat="b in blogs" style="width: 110%;">
              <!-- For version 1 -->
              <div class="col-lg-6 col-md-12 col-sm-12 blog-preview_item"  >
                <div class="entry-thumb image-hover2"  >
                  <a href="blogs" ng-click="openDetails(b.id)"> <img src="/image/blog/@{{b.anh}}"  alt="blog image" /> </a>

                </div>
                <!--entry-thumb image-hover2-->
                <div class="blog-preview_info">
                  <ul class="post-meta">
                    <li><i class="fa fa-user"></i>posted by Admin </li>
                    <li><i class="fa fa-calendar"></i><time class="entry-date">@{{b.created_at}}</time></li>
                  </ul>
                  <!--post-meta-->
                  <h4 class="blog-preview_title"><a href="blogs" ng-click="openDetails(b.id)">@{{b.tieu_de}}</a></h4>
                  <div class="blog-preview_desc"></div>
                  <a class="blog-preview_btn" href="blogs" ng-click="openDetails(b.id)">Read More</a>
                </div>
                <!--blog-preview_info-->
              </div>
              <!--col-lg-6 col-md-6 col-sm-6 blog-preview_item-->
             
              <!-- End for v2 -->
            </div>
            <!--blog_inner-->
          </div>
          <!--blog-outer-container-->
        </div> <!-- col-lg-12 col-md-12 col-sm-12 col-xs-12 -->
      </div>
      <!--row-->
    </div>
    


    <!-- For version 1,2,3 -->
    <!-- For version 1,2 -->
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
  <!-- Mobile Menu-->
  <div id="mobile-menu">
    <ul class="mobile-menu">
      <li>
        <div class="mm-search">
          <form id="search1" action="http://mas1.magikthemes.com/index.php/bolt/catalogsearch/result/" method="get">
            <div class="input-group">
              <div class="input-group-btn">
                <button type="submit" title="Search" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
              <!--input-group-btn-->
              <input class="form-control simple" id="srch-term" type="text" name="q" value="" maxlength="128"
                placeholder="Search" />
              <div id="search_autocomplete1" class="search-autocomplete"></div>
              <script type="text/javascript">
                //<![CDATA[
                var searchForm = new Varien.searchForm('search1', 'srch-term', 'Search entire store here...');
                searchForm.initAutocomplete('bolt/catalogsearch/ajax/suggest/index.html', 'search_autocomplete1');
        //]]>
              </script>
            </div>
            <!--input-group-->
          </form>
        </div>
        <!--mm-search-->
      </li>
      <li>
        <div class="home"> <a href="bolt/index.html"><i class="icon-home"></i>Home</a> </div>
      </li>
      <li class="level0 nav-1 level-top first parent">
        <a href="bolt/mob-smartphone.html" class="level-top">
          <span>Smartphones</span>
        </a>
        <ul class="level0">
          <li class="level1 nav-1-1 first parent">
            <a href="bolt/mob-smartphone/mob-samsung.html">
              <span>Samsung</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-1-1 first">
                <a href="bolt/mob-smartphone/mob-samsung/galaxy-g7.html">
                  <span>Galaxy G7</span>
                </a>
              </li>
              <li class="level2 nav-1-1-2">
                <a href="bolt/mob-smartphone/mob-samsung/sam-nexon.html">
                  <span>Nexon J3 Pro</span>
                </a>
              </li>
              <li class="level2 nav-1-1-3">
                <a href="bolt/mob-smartphone/mob-samsung/sam-prime-gold.html">
                  <span>Prime Gold J2</span>
                </a>
              </li>
              <li class="level2 nav-1-1-4 last">
                <a href="bolt/mob-smartphone/mob-samsung/mob-samsung-pro.html">
                  <span>Samsung M2 Pro</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-2 parent">
            <a href="bolt/mob-smartphone/mob-sony.html">
              <span>Sony</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-2-5 first">
                <a href="bolt/mob-smartphone/mob-sony/mob-xperia-dual.html">
                  <span>Xperia XA Dual</span>
                </a>
              </li>
              <li class="level2 nav-1-2-6">
                <a href="bolt/mob-smartphone/mob-sony/mob-graphite-black.html">
                  <span>Graphite Black</span>
                </a>
              </li>
              <li class="level2 nav-1-2-7">
                <a href="bolt/mob-smartphone/mob-sony/mob-ultra.html">
                  <span>Ultra Dual G5</span>
                </a>
              </li>
              <li class="level2 nav-1-2-8 last">
                <a href="bolt/mob-smartphone/mob-sony/mob-premium.html">
                  <span>Premium Xperia Z5 Dual</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-3 parent">
            <a href="bolt/mob-smartphone/mob-apple.html">
              <span>Apple</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-3-9 first">
                <a href="bolt/mob-smartphone/mob-apple/mob-iphone7p.html">
                  <span>iPhone 7 Plus</span>
                </a>
              </li>
              <li class="level2 nav-1-3-10">
                <a href="bolt/mob-smartphone/mob-apple/mob-iphone6s.html">
                  <span>iPhone 6s</span>
                </a>
              </li>
              <li class="level2 nav-1-3-11">
                <a href="bolt/mob-smartphone/mob-apple/mob-iphone-se.html">
                  <span>iPhone SE</span>
                </a>
              </li>
              <li class="level2 nav-1-3-12 last">
                <a href="bolt/mob-smartphone/mob-apple/iphone-4.html">
                  <span>iPhone 4</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-4 parent">
            <a href="bolt/mob-smartphone/mob-lenovo.html">
              <span>Lenovo</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-4-13 first">
                <a href="bolt/mob-smartphone/mob-lenovo/mob-vibek5.html">
                  <span>Vibe K5 Plus</span>
                </a>
              </li>
              <li class="level2 nav-1-4-14">
                <a href="bolt/mob-smartphone/mob-lenovo/mob-notep4.html">
                  <span>Note P4</span>
                </a>
              </li>
              <li class="level2 nav-1-4-15">
                <a href="bolt/mob-smartphone/mob-lenovo/mob-k6-power.html">
                  <span>K6 Power</span>
                </a>
              </li>
              <li class="level2 nav-1-4-16 last">
                <a href="bolt/mob-smartphone/mob-lenovo/mob-a6000.html">
                  <span>A600 Shoot</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-5 parent">
            <a href="bolt/mob-smartphone/mob-moto.html">
              <span>Motorola</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-5-17 first">
                <a href="bolt/mob-smartphone/mob-moto/mob-moto-e4.html">
                  <span>Moto E4 Plus</span>
                </a>
              </li>
              <li class="level2 nav-1-5-18">
                <a href="bolt/mob-smartphone/mob-moto/mob-moto-g2.html">
                  <span>Moto G2</span>
                </a>
              </li>
              <li class="level2 nav-1-5-19">
                <a href="bolt/mob-smartphone/mob-moto/mob-g5-pro.html">
                  <span>Moto G5 Pro</span>
                </a>
              </li>
              <li class="level2 nav-1-5-20 last">
                <a href="bolt/mob-smartphone/mob-moto/mob-zgold.html">
                  <span>Moto Z Gold</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-6 last parent">
            <a href="bolt/mob-smartphone/mob-htc.html">
              <span>HTC</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-6-21 first">
                <a href="bolt/mob-smartphone/mob-htc/mob-desire6.html">
                  <span>Desire 640</span>
                </a>
              </li>
              <li class="level2 nav-1-6-22">
                <a href="bolt/mob-smartphone/mob-htc/mob-sprinklepro.html">
                  <span>Sprinkle Pro</span>
                </a>
              </li>
              <li class="level2 nav-1-6-23">
                <a href="bolt/mob-smartphone/mob-htc/mob-desire526.html">
                  <span>Desire 526G Plus</span>
                </a>
              </li>
              <li class="level2 nav-1-6-24 last">
                <a href="bolt/mob-smartphone/mob-htc/mob-htcstone.html">
                  <span>HTC Stone Black</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="level0 nav-2 level-top parent">
        <a href="bolt/mob-phones.html" class="level-top">
          <span>Phones</span>
        </a>
        <ul class="level0">
          <li class="level1 nav-2-1 first parent">
            <a href="bolt/mob-phones/mob-nokia.html">
              <span>Nokia</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-1-1 first">
                <a href="bolt/mob-phones/mob-nokia/mob-nokia-108.html">
                  <span>Nokia 108 Dual SIM</span>
                </a>
              </li>
              <li class="level2 nav-2-1-2">
                <a href="bolt/mob-phones/mob-nokia/mob-asha-205.html">
                  <span>Asha 205</span>
                </a>
              </li>
              <li class="level2 nav-2-1-3">
                <a href="bolt/mob-phones/mob-nokia/mob-lumia-800.html">
                  <span>Lumia 800</span>
                </a>
              </li>
              <li class="level2 nav-2-1-4 last">
                <a href="bolt/mob-phones/mob-nokia/mob-nokia-classic.html">
                  <span>Classic Prime</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-2 parent">
            <a href="bolt/mob-phones/mob-intex.html">
              <span>Intex</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-2-5 first">
                <a href="bolt/mob-phones/mob-intex/mob-aqua-lions-4g.html">
                  <span>Aqua Lions 4G</span>
                </a>
              </li>
              <li class="level2 nav-2-2-6">
                <a href="bolt/mob-phones/mob-intex/mob-intex-elyt-e7.html">
                  <span>Intex Elyt-e7</span>
                </a>
              </li>
              <li class="level2 nav-2-2-7">
                <a href="bolt/mob-phones/mob-intex/mob-aqua-trend.html">
                  <span>Aqua Trend</span>
                </a>
              </li>
              <li class="level2 nav-2-2-8 last">
                <a href="bolt/mob-phones/mob-intex/intex-speed-hd.html">
                  <span>Intex-speed-hd</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-3 parent">
            <a href="bolt/mob-phones/mob-alcatel.html">
              <span>Alcatel</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-3-9 first">
                <a href="bolt/mob-phones/mob-alcatel/mob-alcatel-idol.html">
                  <span>Alcatel IDOL 5S</span>
                </a>
              </li>
              <li class="level2 nav-2-3-10">
                <a href="bolt/mob-phones/mob-alcatel/mob-pixi-plus-power.html">
                  <span>Pixi 4 Plus Power</span>
                </a>
              </li>
              <li class="level2 nav-2-3-11">
                <a href="bolt/mob-phones/mob-alcatel/mob-one-touch-idol.html">
                  <span>One Touch Idol</span>
                </a>
              </li>
              <li class="level2 nav-2-3-12 last">
                <a href="bolt/mob-phones/mob-alcatel/mob-alcatel-flash.html">
                  <span>Alcatel Flash</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-4 parent">
            <a href="bolt/mob-phones/mob-lephone.html">
              <span>Lephone</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-4-13 first">
                <a href="bolt/mob-phones/mob-lephone/mob-shine-lite.html">
                  <span>Shine Lite</span>
                </a>
              </li>
              <li class="level2 nav-2-4-14">
                <a href="bolt/mob-phones/mob-lephone/mob-lephone-idol-dual.html">
                  <span>Lephone Idol Dual</span>
                </a>
              </li>
              <li class="level2 nav-2-4-15">
                <a href="bolt/mob-phones/mob-lephone/mob-lephone-one-touch.html">
                  <span>One Touch Idol</span>
                </a>
              </li>
              <li class="level2 nav-2-4-16 last">
                <a href="bolt/mob-phones/mob-lephone/mob-pixi-prime.html">
                  <span>Pixi Prime Gold</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-5 parent">
            <a href="bolt/mob-phones/mob-melbon.html">
              <span>Melbon</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-5-17 first">
                <a href="bolt/mob-phones/mob-melbon/mob-knight-premium.html">
                  <span>Knight Premium</span>
                </a>
              </li>
              <li class="level2 nav-2-5-18">
                <a href="bolt/mob-phones/mob-melbon/mob-pulse-spark.html">
                  <span>Pulse Spark</span>
                </a>
              </li>
              <li class="level2 nav-2-5-19">
                <a href="bolt/mob-phones/mob-melbon/mob-hd-plus-a190.html">
                  <span>HD plus A190</span>
                </a>
              </li>
              <li class="level2 nav-2-5-20 last">
                <a href="bolt/mob-phones/mob-melbon/mob-pace-juice.html">
                  <span>Pace Juice</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-6 last parent">
            <a href="bolt/mob-phones/mob-micro.html">
              <span>Micromax</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-6-21 first">
                <a href="bolt/mob-phones/mob-micro/mob-canvas-sparkq.html">
                  <span>Canvas Spark Q380</span>
                </a>
              </li>
              <li class="level2 nav-2-6-22">
                <a href="bolt/mob-phones/mob-micro/mob-canvas-selfie-lens.html">
                  <span>Canvas Selfie Lens </span>
                </a>
              </li>
              <li class="level2 nav-2-6-23">
                <a href="bolt/mob-phones/mob-micro/mob-bolt-q381.html">
                  <span>Bolt Q381</span>
                </a>
              </li>
              <li class="level2 nav-2-6-24 last">
                <a href="bolt/mob-phones/mob-micro/mob-nitro-4g.html">
                  <span>Nitro 4G E455</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="level0 nav-3 level-top parent">
        <a href="bolt/mob-wearables.html" class="level-top">
          <span>Apple Phones</span>
        </a>
        <ul class="level0">
          <li class="level1 nav-3-1 first parent">
            <a href="bolt/mob-wearables/mob-karbon.html">
              <span>Karbon</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-1-1 first">
                <a href="bolt/mob-wearables/mob-karbon/mob-titanium-octane.html">
                  <span>Titanium Octane</span>
                </a>
              </li>
              <li class="level2 nav-3-1-2">
                <a href="bolt/mob-wearables/mob-karbon/mob-aura-note-4g.html">
                  <span>Aura Note 4G</span>
                </a>
              </li>
              <li class="level2 nav-3-1-3">
                <a href="bolt/mob-wearables/mob-karbon/mob-titanium-mach-five.html">
                  <span>Titanium Mach Five</span>
                </a>
              </li>
              <li class="level2 nav-3-1-4 last">
                <a href="bolt/mob-wearables/mob-karbon/mob-karbonn-k101-star.html">
                  <span>Karbonn K101 Star</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-2 parent">
            <a href="bolt/mob-wearables/mob-lava.html">
              <span>Lava</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-2-5 first">
                <a href="bolt/mob-wearables/mob-lava/mob-lava-iris-x8.html">
                  <span>Lava Iris X8 16GB</span>
                </a>
              </li>
              <li class="level2 nav-3-2-6">
                <a href="bolt/mob-wearables/mob-lava/mob-kkt-uno-plus.html">
                  <span>KKT Uno Plus</span>
                </a>
              </li>
              <li class="level2 nav-3-2-7">
                <a href="bolt/mob-wearables/mob-lava/mob-lava-pixelv2.html">
                  <span>Lava Pixel V2</span>
                </a>
              </li>
              <li class="level2 nav-3-2-8 last">
                <a href="bolt/mob-wearables/mob-lava/mob-iris-504q.html">
                  <span>Iris 504Q</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-3 parent">
            <a href="bolt/mob-wearables/mob-gionee.html">
              <span>Gionee</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-3-9 first">
                <a href="bolt/mob-wearables/mob-gionee/mob-pioneer-p5w.html">
                  <span>Pioneer P5W</span>
                </a>
              </li>
              <li class="level2 nav-3-3-10">
                <a href="bolt/mob-wearables/mob-gionee/mob-marathon-m2.html">
                  <span>Marathon M2</span>
                </a>
              </li>
              <li class="level2 nav-3-3-11">
                <a href="bolt/mob-wearables/mob-gionee/mob-gionee-e8.html">
                  <span>Gionee ELIFE E8</span>
                </a>
              </li>
              <li class="level2 nav-3-3-12 last">
                <a href="bolt/mob-wearables/mob-gionee/mob-gionee-gpad-g3.html">
                  <span>Gionee Gpad G3</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-4 parent">
            <a href="bolt/mob-wearables/mob-datawind.html">
              <span>Datawind</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-4-13 first">
                <a href="bolt/mob-wearables/mob-datawind/mob-pocketsurfer-2g.html">
                  <span>PocketSurfer 2G4</span>
                </a>
              </li>
              <li class="level2 nav-3-4-14">
                <a href="bolt/mob-wearables/mob-datawind/mob-unisalte.html">
                  <span>Unisalte 2G</span>
                </a>
              </li>
              <li class="level2 nav-3-4-15">
                <a href="bolt/mob-wearables/mob-datawind/mob-suferpocket.html">
                  <span>Suferpocket 3G</span>
                </a>
              </li>
              <li class="level2 nav-3-4-16 last">
                <a href="bolt/mob-wearables/mob-datawind/mob-mobislate.html">
                  <span>Mobislate</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-5 parent">
            <a href="bolt/mob-wearables/mob-callbar.html">
              <span>Callbar</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-5-17 first">
                <a href="bolt/mob-wearables/mob-callbar/mob-dream-uno.html">
                  <span>Dream UNO</span>
                </a>
              </li>
              <li class="level2 nav-3-5-18">
                <a href="bolt/mob-wearables/mob-callbar/mob-stellar-pinnacle-pro.html">
                  <span>Stellar Pinnacle Pro</span>
                </a>
              </li>
              <li class="level2 nav-3-5-19">
                <a href="bolt/mob-wearables/mob-callbar/mob-flo-m-5455.html">
                  <span>Flo M-5455</span>
                </a>
              </li>
              <li class="level2 nav-3-5-20 last">
                <a href="bolt/mob-wearables/mob-callbar/mob-boss-chocolate.html">
                  <span>Boss Chocolate M-5373</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-6 last parent">
            <a href="bolt/mob-wearables/mob-spice.html">
              <span>Spice</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-6-21 first">
                <a href="bolt/mob-wearables/mob-spice/mob-x-life-hd.html">
                  <span> X-Life 520 HD</span>
                </a>
              </li>
              <li class="level2 nav-3-6-22">
                <a href="bolt/mob-wearables/mob-spice/mob-boss-dura-m-5030.html">
                  <span>Boss Dura M-5030</span>
                </a>
              </li>
              <li class="level2 nav-3-6-23">
                <a href="bolt/mob-wearables/mob-spice/mob-smart-flo.html">
                  <span>Smart Flo Mi-359</span>
                </a>
              </li>
              <li class="level2 nav-3-6-24 last">
                <a href="bolt/mob-wearables/mob-spice/mob-stellar-mettle-icon.html">
                  <span>Stellar Mettle Icon</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="level0 nav-4 level-top parent">
        <a href="bolt/mob-selfie.html" class="level-top">
          <span>Tablets</span>
        </a>
        <ul class="level0">
          <li class="level1 nav-4-1 first parent">
            <a href="bolt/mob-selfie/mob-swipe.html">
              <span>Swipe</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-4-1-1 first">
                <a href="bolt/mob-selfie/mob-swipe/mob-swipe-konnect.html">
                  <span>Swipe Konnect 4E</span>
                </a>
              </li>
              <li class="level2 nav-4-1-2">
                <a href="bolt/mob-selfie/mob-swipe/mob-swipe-elite-plus.html">
                  <span>Swipe Elite Plus</span>
                </a>
              </li>
              <li class="level2 nav-4-1-3">
                <a href="bolt/mob-selfie/mob-swipe/mob-swipe-sonic.html">
                  <span>Swipe Sonic</span>
                </a>
              </li>
              <li class="level2 nav-4-1-4 last">
                <a href="bolt/mob-selfie/mob-swipe/mob-fablet-f2.html">
                  <span>Fablet F2</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-4-2 parent">
            <a href="bolt/mob-selfie/mob-vivo.html">
              <span>Vivo</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-4-2-5 first">
                <a href="bolt/mob-selfie/mob-vivo/mob-vivo-v5plus.html">
                  <span>Vivo V5 Plus</span>
                </a>
              </li>
              <li class="level2 nav-4-2-6">
                <a href="bolt/mob-selfie/mob-vivo/mob-y66-matte.html">
                  <span>Y66 Matte Black</span>
                </a>
              </li>
              <li class="level2 nav-4-2-7">
                <a href="bolt/mob-selfie/mob-vivo/mob-vivo-y513.html">
                  <span>Vivo Y51L</span>
                </a>
              </li>
              <li class="level2 nav-4-2-8 last">
                <a href="bolt/mob-selfie/mob-vivo/mob-vivo-lite.html">
                  <span>Vivo V5Lite</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-4-3 last parent">
            <a href="bolt/mob-selfie/mob-zopo.html">
              <span>Zopo</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-4-3-9 first">
                <a href="bolt/mob-selfie/mob-zopo/mob-zopo7.html">
                  <span>ZOPO Speed 7</span>
                </a>
              </li>
              <li class="level2 nav-4-3-10">
                <a href="bolt/mob-selfie/mob-zopo/mob-zopo-flash.html">
                  <span>ZOPO Flash E</span>
                </a>
              </li>
              <li class="level2 nav-4-3-11">
                <a href="bolt/mob-selfie/mob-zopo/mob-zopo-color.html">
                  <span>ZOPO Color F2</span>
                </a>
              </li>
              <li class="level2 nav-4-3-12 last">
                <a href="bolt/mob-selfie/mob-zopo/mob-marshmallow.html">
                  <span>Marshmallow</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="level0 nav-5 level-top last">
        <a href="bolt/mob-accesories.html" class="level-top">
          <span>Accesories</span>
        </a>
      </li>
    </ul>
    <!--mobile-menu-->
    <div class="top-links">
      <div class="lang-curr">
        <!-- For version 1,2,3 -->
        <div class="dropdown block-language-wrapper">
          <a href="#" class="block-language dropdown-toggle" data-target="#" data-toggle="dropdown" role="button"> <img
              src="../skin/frontend/rwd/bolt/images/flags/bolt.png" alt="bolt" /> English <span class="caret"></span>
          </a>
          <ul role="menu" class="dropdown-menu">
            <li role="presentation"><a href="bolt/indexad03.html?___from_store=bolt" tabindex="-1" role="menuitem">
                <img src="../skin/frontend/rwd/bolt/images/flags/bolt.png" alt="English" />
                English </a></li>
            <li role="presentation"><a href="boltfr/indexad03.html?___from_store=bolt" tabindex="-1" role="menuitem">
                <img src="../skin/frontend/rwd/bolt/images/flags/boltfr.png" alt="French" />
                French </a></li>
          </ul>
        </div>
        <!--dropdown block-language-wrapper-->
        <!-- End for version 4 -->
        <!-- For version 1,2,3 -->
        <div class="dropdown block-currency-wrapper">
          <a href="#" class="block-currency dropdown-toggle" data-target="#" data-toggle="dropdown" role="button"> USD
            <span class="caret"></span></a>
          <ul role="menu" class="dropdown-menu">
            <li role="presentation"><a
                href="bolt/directory/currency/switch/currency/EGP/uenc/aHR0cDovL21hczEubWFnaWt0aGVtZXMuY29tL2luZGV4LnBocC9ib2x0/index3945.html?___store=EGP"
                tabindex="-1" role="menuitem" title="EGP"> £ - EGP</a></li>
            <li role="presentation"><a
                href="bolt/directory/currency/switch/currency/EUR/uenc/aHR0cDovL21hczEubWFnaWt0aGVtZXMuY29tL2luZGV4LnBocC9ib2x0/indexd4fa.html?___store=EUR"
                tabindex="-1" role="menuitem" title="EUR"> € - EUR</a></li>
            <li role="presentation"><a
                href="bolt/directory/currency/switch/currency/USD/uenc/aHR0cDovL21hczEubWFnaWt0aGVtZXMuY29tL2luZGV4LnBocC9ib2x0/indexf670.html?___store=USD"
                tabindex="-1" role="menuitem" title="USD"> $ - USD</a></li>
          </ul>
        </div>
        <!-- End for version 4 -->
      </div>
      <!--lang-curr-->
      <ul class="links">
        <li><a href="bolt/customer/account/index.html" title="My Account">My Account</a></li>
        <li><a href="bolt/wishlist/index.html" title="Wishlist">Wishlist</a></li>
        <li><a href="bolt/checkout/onepage/index.html" title="Checkout">Checkout</a></li>
        <li><a href="bolt/blog.html" title="Blog"><span>Blog</span></a></li>
        <li class="last"><a href="bolt/customer/account/login/index.html" title="Log In"><span>Log In</span></a></li>
      </ul>
    </div>
    <!--top-links-->
  </div>
</body>
</html>