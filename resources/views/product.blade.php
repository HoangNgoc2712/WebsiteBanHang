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
   @include('includes.menu')

    <!-- End for version 4 -->
    <!-- For version 1 , 2 -->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <!-- <div class="col-xs-12">
            <ul>
              <li class="home">
                <a href="../index.html" title="Go to Home Page">Home</a>
                <span>/ </span>
              </li>
              
              <li class="category2032">
                <strong>@{{productDong.dongsp.ten_dong}}</strong>
              </li>
            </ul>
          </div> -->
          <!--col-xs-12-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </div>
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
                    
                    <!-- BEGIN LIMITER -->
                    <div id="limiter" class="col-3-xxxl col-xl-3 col-lg-4 col-12 form-group" style=" width: 50%; float: right">
                          <label for="search" style="float:left;font-size: 13px; font-weight: normal;" >items per page:</label>
                          <input type="number" style="width: 50px;height:35px " min="1" max="100" class="form-control" ng-model="itemPerPage">
                     
                    </div>
                    <!--limiter-->
                 
                    <!--limiter-->
                  </div>
                  <!--pager-->
                </div>
                <!--toolbar-->
              </div>
              <!-- PHẦN SẢN PHẨM -->
              <!--top-toolbar-->
              <!-- BEGIN CATEGORY PRODUCTS -->
              <div class="category-products " >
                <ul class="products-grid" dir-paginate="p in productDong|filter: timkiem |itemsPerPage:itemPerPage" >
                           
                  <li class="item col-lg-4 col-md-6 col-sm-6 col-xs-6">
                    <div class="item-inner">
                      <div class="item-img" >
                        <div class="item-img-info">
                          <a class="product-image" href="product_detail" ng-click="openDetails(p.id)"
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
                            <a href="product_detail" ng-click="openDetails(p.id)" title="">@{{p.ten_sp}} </a>
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
                              <a href="product_detail" ng-click="openDetails(p.id)"><button type="button"   class="button btn-cart"><span>Xem chi tiết</span></button></a>
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
          <!-- PHẦN MENU BÊN TRÁI -->
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
           
            <!-- <div class="hot-banner"><img src="../../../skin/frontend/rwd/bolt/images/hot-trends-banner.jpg"
             -->
            
           
            
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
              
            </div>
            <!--input-group-->
          </form>
        </div>
        <!--mm-search-->
      </li>
      <li>
        <div class="home"> <a href="trangchu"><i class="icon-home"></i>Home</a> </div>
      </li>
      <li class="level0 nav-1 active level-top first parent">
        <a href="../mob-smartphone.html" class="level-top">
          <span>Smartphones</span>
        </a>
        <ul class="level0">
          <li class="level1 nav-1-1 first parent">
            <a href="mob-samsung.html">
              <span>Samsung</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-1-1 first">
                <a href="mob-samsung/galaxy-g7.html">
                  <span>Galaxy G7</span>
                </a>
              </li>
              <li class="level2 nav-1-1-2">
                <a href="mob-samsung/sam-nexon.html">
                  <span>Nexon J3 Pro</span>
                </a>
              </li>
              <li class="level2 nav-1-1-3">
                <a href="mob-samsung/sam-prime-gold.html">
                  <span>Prime Gold J2</span>
                </a>
              </li>
              <li class="level2 nav-1-1-4 last">
                <a href="mob-samsung/mob-samsung-pro.html">
                  <span>Samsung M2 Pro</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-2 active parent">
            <a href="mob-sony.html">
              <span>Sony</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-2-5 first">
                <a href="mob-sony/mob-xperia-dual.html">
                  <span>Xperia XA Dual</span>
                </a>
              </li>
              <li class="level2 nav-1-2-6">
                <a href="mob-sony/mob-graphite-black.html">
                  <span>Graphite Black</span>
                </a>
              </li>
              <li class="level2 nav-1-2-7">
                <a href="mob-sony/mob-ultra.html">
                  <span>Ultra Dual G5</span>
                </a>
              </li>
              <li class="level2 nav-1-2-8 last">
                <a href="mob-sony/mob-premium.html">
                  <span>Premium Xperia Z5 Dual</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-3 parent">
            <a href="mob-apple.html">
              <span>Apple</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-3-9 first">
                <a href="mob-apple/mob-iphone7p.html">
                  <span>iPhone 7 Plus</span>
                </a>
              </li>
              <li class="level2 nav-1-3-10">
                <a href="mob-apple/mob-iphone6s.html">
                  <span>iPhone 6s</span>
                </a>
              </li>
              <li class="level2 nav-1-3-11">
                <a href="mob-apple/mob-iphone-se.html">
                  <span>iPhone SE</span>
                </a>
              </li>
              <li class="level2 nav-1-3-12 last">
                <a href="mob-apple/iphone-4.html">
                  <span>iPhone 4</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-4 parent">
            <a href="mob-lenovo.html">
              <span>Lenovo</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-4-13 first">
                <a href="mob-lenovo/mob-vibek5.html">
                  <span>Vibe K5 Plus</span>
                </a>
              </li>
              <li class="level2 nav-1-4-14">
                <a href="mob-lenovo/mob-notep4.html">
                  <span>Note P4</span>
                </a>
              </li>
              <li class="level2 nav-1-4-15">
                <a href="mob-lenovo/mob-k6-power.html">
                  <span>K6 Power</span>
                </a>
              </li>
              <li class="level2 nav-1-4-16 last">
                <a href="mob-lenovo/mob-a6000.html">
                  <span>A600 Shoot</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-5 parent">
            <a href="mob-moto.html">
              <span>Motorola</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-5-17 first">
                <a href="mob-moto/mob-moto-e4.html">
                  <span>Moto E4 Plus</span>
                </a>
              </li>
              <li class="level2 nav-1-5-18">
                <a href="mob-moto/mob-moto-g2.html">
                  <span>Moto G2</span>
                </a>
              </li>
              <li class="level2 nav-1-5-19">
                <a href="mob-moto/mob-g5-pro.html">
                  <span>Moto G5 Pro</span>
                </a>
              </li>
              <li class="level2 nav-1-5-20 last">
                <a href="mob-moto/mob-zgold.html">
                  <span>Moto Z Gold</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-1-6 last parent">
            <a href="mob-htc.html">
              <span>HTC</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-1-6-21 first">
                <a href="mob-htc/mob-desire6.html">
                  <span>Desire 640</span>
                </a>
              </li>
              <li class="level2 nav-1-6-22">
                <a href="mob-htc/mob-sprinklepro.html">
                  <span>Sprinkle Pro</span>
                </a>
              </li>
              <li class="level2 nav-1-6-23">
                <a href="mob-htc/mob-desire526.html">
                  <span>Desire 526G Plus</span>
                </a>
              </li>
              <li class="level2 nav-1-6-24 last">
                <a href="mob-htc/mob-htcstone.html">
                  <span>HTC Stone Black</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="level0 nav-2 level-top parent">
        <a href="../mob-phones.html" class="level-top">
          <span>Phones</span>
        </a>
        <ul class="level0">
          <li class="level1 nav-2-1 first parent">
            <a href="../mob-phones/mob-nokia.html">
              <span>Nokia</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-1-1 first">
                <a href="../mob-phones/mob-nokia/mob-nokia-108.html">
                  <span>Nokia 108 Dual SIM</span>
                </a>
              </li>
              <li class="level2 nav-2-1-2">
                <a href="../mob-phones/mob-nokia/mob-asha-205.html">
                  <span>Asha 205</span>
                </a>
              </li>
              <li class="level2 nav-2-1-3">
                <a href="../mob-phones/mob-nokia/mob-lumia-800.html">
                  <span>Lumia 800</span>
                </a>
              </li>
              <li class="level2 nav-2-1-4 last">
                <a href="../mob-phones/mob-nokia/mob-nokia-classic.html">
                  <span>Classic Prime</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-2 parent">
            <a href="../mob-phones/mob-intex.html">
              <span>Intex</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-2-5 first">
                <a href="../mob-phones/mob-intex/mob-aqua-lions-4g.html">
                  <span>Aqua Lions 4G</span>
                </a>
              </li>
              <li class="level2 nav-2-2-6">
                <a href="../mob-phones/mob-intex/mob-intex-elyt-e7.html">
                  <span>Intex Elyt-e7</span>
                </a>
              </li>
              <li class="level2 nav-2-2-7">
                <a href="../mob-phones/mob-intex/mob-aqua-trend.html">
                  <span>Aqua Trend</span>
                </a>
              </li>
              <li class="level2 nav-2-2-8 last">
                <a href="../mob-phones/mob-intex/intex-speed-hd.html">
                  <span>Intex-speed-hd</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-3 parent">
            <a href="../mob-phones/mob-alcatel.html">
              <span>Alcatel</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-3-9 first">
                <a href="../mob-phones/mob-alcatel/mob-alcatel-idol.html">
                  <span>Alcatel IDOL 5S</span>
                </a>
              </li>
              <li class="level2 nav-2-3-10">
                <a href="../mob-phones/mob-alcatel/mob-pixi-plus-power.html">
                  <span>Pixi 4 Plus Power</span>
                </a>
              </li>
              <li class="level2 nav-2-3-11">
                <a href="../mob-phones/mob-alcatel/mob-one-touch-idol.html">
                  <span>One Touch Idol</span>
                </a>
              </li>
              <li class="level2 nav-2-3-12 last">
                <a href="../mob-phones/mob-alcatel/mob-alcatel-flash.html">
                  <span>Alcatel Flash</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-4 parent">
            <a href="../mob-phones/mob-lephone.html">
              <span>Lephone</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-4-13 first">
                <a href="../mob-phones/mob-lephone/mob-shine-lite.html">
                  <span>Shine Lite</span>
                </a>
              </li>
              <li class="level2 nav-2-4-14">
                <a href="../mob-phones/mob-lephone/mob-lephone-idol-dual.html">
                  <span>Lephone Idol Dual</span>
                </a>
              </li>
              <li class="level2 nav-2-4-15">
                <a href="../mob-phones/mob-lephone/mob-lephone-one-touch.html">
                  <span>One Touch Idol</span>
                </a>
              </li>
              <li class="level2 nav-2-4-16 last">
                <a href="../mob-phones/mob-lephone/mob-pixi-prime.html">
                  <span>Pixi Prime Gold</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-5 parent">
            <a href="../mob-phones/mob-melbon.html">
              <span>Melbon</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-5-17 first">
                <a href="../mob-phones/mob-melbon/mob-knight-premium.html">
                  <span>Knight Premium</span>
                </a>
              </li>
              <li class="level2 nav-2-5-18">
                <a href="../mob-phones/mob-melbon/mob-pulse-spark.html">
                  <span>Pulse Spark</span>
                </a>
              </li>
              <li class="level2 nav-2-5-19">
                <a href="../mob-phones/mob-melbon/mob-hd-plus-a190.html">
                  <span>HD plus A190</span>
                </a>
              </li>
              <li class="level2 nav-2-5-20 last">
                <a href="../mob-phones/mob-melbon/mob-pace-juice.html">
                  <span>Pace Juice</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-2-6 last parent">
            <a href="../mob-phones/mob-micro.html">
              <span>Micromax</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-2-6-21 first">
                <a href="../mob-phones/mob-micro/mob-canvas-sparkq.html">
                  <span>Canvas Spark Q380</span>
                </a>
              </li>
              <li class="level2 nav-2-6-22">
                <a href="../mob-phones/mob-micro/mob-canvas-selfie-lens.html">
                  <span>Canvas Selfie Lens </span>
                </a>
              </li>
              <li class="level2 nav-2-6-23">
                <a href="../mob-phones/mob-micro/mob-bolt-q381.html">
                  <span>Bolt Q381</span>
                </a>
              </li>
              <li class="level2 nav-2-6-24 last">
                <a href="../mob-phones/mob-micro/mob-nitro-4g.html">
                  <span>Nitro 4G E455</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="level0 nav-3 level-top parent">
        <a href="../mob-wearables.html" class="level-top">
          <span>Apple Phones</span>
        </a>
        <ul class="level0">
          <li class="level1 nav-3-1 first parent">
            <a href="../mob-wearables/mob-karbon.html">
              <span>Karbon</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-1-1 first">
                <a href="../mob-wearables/mob-karbon/mob-titanium-octane.html">
                  <span>Titanium Octane</span>
                </a>
              </li>
              <li class="level2 nav-3-1-2">
                <a href="../mob-wearables/mob-karbon/mob-aura-note-4g.html">
                  <span>Aura Note 4G</span>
                </a>
              </li>
              <li class="level2 nav-3-1-3">
                <a href="../mob-wearables/mob-karbon/mob-titanium-mach-five.html">
                  <span>Titanium Mach Five</span>
                </a>
              </li>
              <li class="level2 nav-3-1-4 last">
                <a href="../mob-wearables/mob-karbon/mob-karbonn-k101-star.html">
                  <span>Karbonn K101 Star</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-2 parent">
            <a href="../mob-wearables/mob-lava.html">
              <span>Lava</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-2-5 first">
                <a href="../mob-wearables/mob-lava/mob-lava-iris-x8.html">
                  <span>Lava Iris X8 16GB</span>
                </a>
              </li>
              <li class="level2 nav-3-2-6">
                <a href="../mob-wearables/mob-lava/mob-kkt-uno-plus.html">
                  <span>KKT Uno Plus</span>
                </a>
              </li>
              <li class="level2 nav-3-2-7">
                <a href="../mob-wearables/mob-lava/mob-lava-pixelv2.html">
                  <span>Lava Pixel V2</span>
                </a>
              </li>
              <li class="level2 nav-3-2-8 last">
                <a href="../mob-wearables/mob-lava/mob-iris-504q.html">
                  <span>Iris 504Q</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-3 parent">
            <a href="../mob-wearables/mob-gionee.html">
              <span>Gionee</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-3-9 first">
                <a href="../mob-wearables/mob-gionee/mob-pioneer-p5w.html">
                  <span>Pioneer P5W</span>
                </a>
              </li>
              <li class="level2 nav-3-3-10">
                <a href="../mob-wearables/mob-gionee/mob-marathon-m2.html">
                  <span>Marathon M2</span>
                </a>
              </li>
              <li class="level2 nav-3-3-11">
                <a href="../mob-wearables/mob-gionee/mob-gionee-e8.html">
                  <span>Gionee ELIFE E8</span>
                </a>
              </li>
              <li class="level2 nav-3-3-12 last">
                <a href="../mob-wearables/mob-gionee/mob-gionee-gpad-g3.html">
                  <span>Gionee Gpad G3</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-4 parent">
            <a href="../mob-wearables/mob-datawind.html">
              <span>Datawind</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-4-13 first">
                <a href="../mob-wearables/mob-datawind/mob-pocketsurfer-2g.html">
                  <span>PocketSurfer 2G4</span>
                </a>
              </li>
              <li class="level2 nav-3-4-14">
                <a href="../mob-wearables/mob-datawind/mob-unisalte.html">
                  <span>Unisalte 2G</span>
                </a>
              </li>
              <li class="level2 nav-3-4-15">
                <a href="../mob-wearables/mob-datawind/mob-suferpocket.html">
                  <span>Suferpocket 3G</span>
                </a>
              </li>
              <li class="level2 nav-3-4-16 last">
                <a href="../mob-wearables/mob-datawind/mob-mobislate.html">
                  <span>Mobislate</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-5 parent">
            <a href="../mob-wearables/mob-callbar.html">
              <span>Callbar</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-5-17 first">
                <a href="../mob-wearables/mob-callbar/mob-dream-uno.html">
                  <span>Dream UNO</span>
                </a>
              </li>
              <li class="level2 nav-3-5-18">
                <a href="../mob-wearables/mob-callbar/mob-stellar-pinnacle-pro.html">
                  <span>Stellar Pinnacle Pro</span>
                </a>
              </li>
              <li class="level2 nav-3-5-19">
                <a href="../mob-wearables/mob-callbar/mob-flo-m-5455.html">
                  <span>Flo M-5455</span>
                </a>
              </li>
              <li class="level2 nav-3-5-20 last">
                <a href="../mob-wearables/mob-callbar/mob-boss-chocolate.html">
                  <span>Boss Chocolate M-5373</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-3-6 last parent">
            <a href="../mob-wearables/mob-spice.html">
              <span>Spice</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-3-6-21 first">
                <a href="../mob-wearables/mob-spice/mob-x-life-hd.html">
                  <span> X-Life 520 HD</span>
                </a>
              </li>
              <li class="level2 nav-3-6-22">
                <a href="../mob-wearables/mob-spice/mob-boss-dura-m-5030.html">
                  <span>Boss Dura M-5030</span>
                </a>
              </li>
              <li class="level2 nav-3-6-23">
                <a href="../mob-wearables/mob-spice/mob-smart-flo.html">
                  <span>Smart Flo Mi-359</span>
                </a>
              </li>
              <li class="level2 nav-3-6-24 last">
                <a href="../mob-wearables/mob-spice/mob-stellar-mettle-icon.html">
                  <span>Stellar Mettle Icon</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="level0 nav-4 level-top parent">
        <a href="../mob-selfie.html" class="level-top">
          <span>Tablets</span>
        </a>
        <ul class="level0">
          <li class="level1 nav-4-1 first parent">
            <a href="../mob-selfie/mob-swipe.html">
              <span>Swipe</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-4-1-1 first">
                <a href="../mob-selfie/mob-swipe/mob-swipe-konnect.html">
                  <span>Swipe Konnect 4E</span>
                </a>
              </li>
              <li class="level2 nav-4-1-2">
                <a href="../mob-selfie/mob-swipe/mob-swipe-elite-plus.html">
                  <span>Swipe Elite Plus</span>
                </a>
              </li>
              <li class="level2 nav-4-1-3">
                <a href="../mob-selfie/mob-swipe/mob-swipe-sonic.html">
                  <span>Swipe Sonic</span>
                </a>
              </li>
              <li class="level2 nav-4-1-4 last">
                <a href="../mob-selfie/mob-swipe/mob-fablet-f2.html">
                  <span>Fablet F2</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-4-2 parent">
            <a href="../mob-selfie/mob-vivo.html">
              <span>Vivo</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-4-2-5 first">
                <a href="../mob-selfie/mob-vivo/mob-vivo-v5plus.html">
                  <span>Vivo V5 Plus</span>
                </a>
              </li>
              <li class="level2 nav-4-2-6">
                <a href="../mob-selfie/mob-vivo/mob-y66-matte.html">
                  <span>Y66 Matte Black</span>
                </a>
              </li>
              <li class="level2 nav-4-2-7">
                <a href="../mob-selfie/mob-vivo/mob-vivo-y513.html">
                  <span>Vivo Y51L</span>
                </a>
              </li>
              <li class="level2 nav-4-2-8 last">
                <a href="../mob-selfie/mob-vivo/mob-vivo-lite.html">
                  <span>Vivo V5Lite</span>
                </a>
              </li>
            </ul>
          </li>
          <li class="level1 nav-4-3 last parent">
            <a href="../mob-selfie/mob-zopo.html">
              <span>Zopo</span>
            </a>
            <ul class="level1">
              <li class="level2 nav-4-3-9 first">
                <a href="../mob-selfie/mob-zopo/mob-zopo7.html">
                  <span>ZOPO Speed 7</span>
                </a>
              </li>
              <li class="level2 nav-4-3-10">
                <a href="../mob-selfie/mob-zopo/mob-zopo-flash.html">
                  <span>ZOPO Flash E</span>
                </a>
              </li>
              <li class="level2 nav-4-3-11">
                <a href="../mob-selfie/mob-zopo/mob-zopo-color.html">
                  <span>ZOPO Color F2</span>
                </a>
              </li>
              <li class="level2 nav-4-3-12 last">
                <a href="../mob-selfie/mob-zopo/mob-marshmallow.html">
                  <span>Marshmallow</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="level0 nav-5 level-top last">
        <a href="../mob-accesories.html" class="level-top">
          <span>Accesories</span>
        </a>
      </li>
    </ul>
    <!--mobile-menu-->
    <div class="top-links">
      
      <!--lang-curr-->
      <ul class="links">
        <li><a href="../customer/account/index.html" title="My Account">My Account</a></li>
        <li><a href="../wishlist/index.html" title="Wishlist">Wishlist</a></li>
        <li><a href="../checkout/onepage/index.html" title="Checkout">Checkout</a></li>
        <li><a href="../blog.html" title="Blog"><span>Blog</span></a></li>
        <li class="last"><a href="../customer/account/login/index.html" title="Log In"><span>Log In</span></a></li>
      </ul>
    </div>
    <!--top-links-->
  </div>
</body>

</html>