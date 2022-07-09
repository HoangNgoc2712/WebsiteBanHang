  <nav>
      <div class="container">
        <div class="nav-inner">
          <!-- BEGIN NAV -->
          <ul id="nav" class="hidden-xs">
            <li id="nav-home1" class="level0 parent drop-menu"><a href="trangchu"
                class="level-top active"><span>TRANG CHỦ</span></a>
            </li>
            <li class="mega-menu">
              <a class="level-top" href="laptop"><span>LapTop</span></a>
              
              <!--level0-wrapper dropdown-6col-->
              <!--mega menu-->
            </li>
            <li class="mega-menu">
              <a class="level-top" href="bolt/mob-phones.html"><span>DÒNG SẢN PHẨM</span></a>
              <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <!--mega menu-->
                        <ul class="level0" ng-repeat="d in dongsanphams">
                          <li class="level3 nav-6-1 parent item" style="float: left">
                            <a  href="getSPDong" ng-click="saveDong(d.id)"><span>@{{d.ten_dong}}</span></a>
                            <!--sub sub category-->
                          
                            <!--level1-->
                            <!--sub sub category-->
                          </li>
                          <!--level3 nav-6-1 parent item-->
                          
                          <!--level3 nav-6-1 parent item-->
                        </ul>
                        <!--level0-->
                      </div>
                      <!--nav-block nav-block-center-->
                    </div>
                    <!--col-1-->
                    <div class="col-2">
                      <div class="menu_image1"><a title="" href="#"><img alt="menu_image"
                              src="/image/banner/banner3.png" /> </a>
                      </div>
                    </div>
                    <!-- col-2 -->
                  </div>
                  <!--level0-wrapper2-->
                </div>
                <!--container-->
              </div>
              <!--level0-wrapper dropdown-6col-->
              <!--mega menu-->
            </li> 
            <li class="mega-menu">
              <a class="level-top" href="bolt/mob-phones.html"><span>THƯƠNG HIỆU</span></a>
              <div class="level0-wrapper dropdown-6col" style="left: 0px; display: none;">
                <div class="container">
                  <div class="level0-wrapper2">
                    <div class="col-1">
                      <div class="nav-block nav-block-center">
                        <!--mega menu-->
                        <ul class="level0" ng-repeat="d in thuonghieus">
                          <li class="level3 nav-6-1 parent item" style="float: left">
                            <a  href="getSPthuonghieu" ng-click="openDetails (d.id)"><span>@{{d.ten_thuong_hieu}}</span></a>
                            <!--sub sub category-->
                          
                            <!--level1-->
                            <!--sub sub category-->
                          </li>
                          <!--level3 nav-6-1 parent item-->
                          
                          <!--level3 nav-6-1 parent item-->
                        </ul>
                        <!--level0-->
                      </div>
                      <!--nav-block nav-block-center-->
                    </div>
                    <!--col-1-->
                    <div class="col-2">
                      <div class="menu_image1"><a title="" href="#"><img alt="menu_image"
                        src="/image/banner/banner.jpg" /> </a></div>
                    </div>
                    <!--col-2-->
                  </div>
                  <!--level0-wrapper2-->
                </div>
                <!--container-->
              </div>
              <!--level0-wrapper dropdown-6col-->
              <!--mega menu-->
            </li> 
          
            
            <li class="nav-custom-link mega-menu">
              <a href="#" class="level-top">
                <span>LIÊN HỆ</span>
              </a>
              
            </li>
          </ul>
          <!--nav-->
        </div>
        <!--nav-inner-->
      </div>
      <!--container-->
    </nav>