<header >
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <!-- For version 1,2,3 -->
              <div class="dropdown block-language-wrapper">
                <div class="myaccount"style="color: white; size: 15px"><span class="fa fa-phone">&nbsp;</span>
                  <span class="hidden-xs"> Hotline  (+84) 987654321</span>
                </div>
              </div>
              <!--dropdown block-language-wrapper-->
              <!-- End for version 4 -->
            </div>
            <!--col-xs-12 col-sm-6-->
            <div class="col-xs-6 hidden-xs">
              <div class="toplinks">
                <div class="links">
                  <div class="myaccount"><a href="bolt/customer/account/index.html" title="My Account"><span
                        class="hidden-xs">Tài khoản</span></a></div>
                  
                  <div class="demo"><a href="bolt/blog.html" title="Blog"><span class="hidden-xs">Blog</span></a>
                  </div>
                  <!-- Header Company -->
                  <div class="dropdown block-company-wrapper hidden-xs"> <a 
                      class="block-company dropdown-toggle" data-target="#" data-toggle="dropdown" role="button">
                      Thông báo </a>
                   
                  </div>
                  <!-- End Header Company -->
                  
                 <a href="/index/login" style="color: white; padding-left:10px"  ng-model="dangnhap" class="nav-link dropdown-toggle" >@{{dangnhap}}</a>
                      <div class="dropdown block-company-wrapper hidden-xs"  style="margin-right: 5%;" ng-show="test">
                        <a data-target="#" data-toggle="dropdown"  role="button" href="#"><span  class="caret">                         
                        </span></a>
                            <ul class="dropdown-menu" >
                                <li  role="presentation"><a title="Logout" href="" ng-click="dangxuat()">Đăng Xuất</a></li>                       
                            </ul>
                        
                      </div>
                     
                    
                 
                 
                 
                </div>
                <!--links-->
              </div>
              <!--toplinks-->
            </div>
            <!--col-xs-6 hidden-xs-->
          </div>
          <!--row-->
        </div>
        <!--container-->
      </div>
      <!--header-top-->
      <div class="header-m">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs">
              <!-- For version 1,2 -->
              <div class="search-box">
                <form id="search_mini_form" action="http://mas1.magikthemes.com/index.php/bolt/catalogsearch/result/"
                  method="get">
                  <!-- Autocomplete End code -->
                  <input type="text" name="search" value="" ng-model="timkiem"  placeholder="Search" class="searchbox" id="search" autocomplete="off"/>
                  <button id="submit-button-search-header"  type="button" class="btn btn-default search-btn-bg"><i class="fa fa-search" style="color:#1eaef5" ></i></button>
                  <div class="search-autocomplete" id="search_autocomplete" style="display: none;"></div>   
                  <script type="text/javascript">
                    var searchForm = new Varien.searchForm('search_mini_form', 'search', 'Search entire store here...');
                    $j('html').click(function () {
                      $j('#search_autocomplete').hide();
                    });
                    $j("#search").keyup(function () {
                      var text = $j(this).val();
                      var chars = text.length;
                      if (chars > 2) {
                        $j("#processing-image").show();
                        var postData = $j('#search_mini_form').serializeArray();
                        $j.ajax({
                          url: 'http://mas1.magikthemes.com/index.php/bolt/catalogsearch/ajax/suggest/',
                          type: "POST",
                          data: postData,
                          success: function (data) {
                            $j("#processing-image").hide();
                            $j('#search_autocomplete').html(data).show();
                          }
                        });
                      }
                    });
                  </script>
                </form>
              </div>
              <!--search-box-->
              <!-- End for version 4 -->
            </div>
            <!--col-lg-3 col-md-4 col-sm-4 col-xs-12 hidden-xs-->
            <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12 logo-block">
              <div class="mm-toggle-wrap">
                <div class="mm-toggle"><i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
              </div>
              <!--mm-toggle-wrap-->
              <div class="logo" >
                <!-- For version 1 -->
                <a href="bolt/index.html" title="Magento Commerce">
                  <div><img src="../image/logo1.png" alt="Laptop Store" style="width:50%; height:50%" /></div>
                </a>
              </div>
              <!--logo-->
            </div>
            <!--col-lg-6 col-md-4 col-sm-4 col-xs-12 logo-block-->
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
              <div class="top-cart-contain pull-right">
                <div class="mini-cart">
                  <!-- For version 1,2 -->
                  <div class="basket" >
                    <a href="cart">
                      <!-- <span class="cart_count">
                        @{{Sum()}} </span> -->
                      <span class="price">Giỏ Hàng</span>
                    </a>
                  </div> 
                  <!-- End for version 4 -->
                  <!-- <div>
                    <div class="top-cart-content">
                      <p class="a-center noitem">You have no items in your shopping cart.</p>
                    </div>-->
                    <!--top-cart-content
                  </div> -->
                </div>
                <!--mini-cart-->
              </div>
              <!--top-cart-contain pull-right-->
            </div>
            <!--col-lg-3 col-md-4 col-sm-4 col-xs-12-->
          </div>
          <!--row-->
        </div>
        <!--container-->
      </div>
      <!--header-m-->
  </header>