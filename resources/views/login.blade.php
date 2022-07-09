<!DOCTYPE html>
<!-- <html lang="en" ng-app="myapp" ng-controller="kh"> -->

<head>
    @include('includes.head')
      <script src="/JS/angular.min.js"></script>
      <script src="/JS/dirPagination.js"></script>
      <script src="/JS/khachhangcontroller.js"> </script> 
      <script src="/JS/sanphamcontroller.js"> </script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="  customer-account-login ">
    <div id="page">
    
        <!-- For version 1,2 -->
        <!-- HEADER -->
        @include('includes.header1')
          <!-- MENU -->
        @include('includes.menu')
        <!-- End for version 4 -->
        <div class="main-container col1-layout">

            <!-- Exclude from version 3 -->
            <div class="main container">
                <div class="account-login">

                    <!-- Exclude from version 3 -->
                    <div class="page-title">
                        <h2>ĐĂNG NHẬP HOẶC ĐĂNG KÍ</h2>
                    </div>
                    <!--page-title-->

                    <form action="http://mas1.magikthemes.com/index.php/bolt/customer/account/loginPost/" method="post" id="login-form">
                        <input name="form_key" type="hidden" value="SrNLqZBa2jD5KDHp" />
                        <fieldset class="col2-set">
                            <div class="col-1 new-users">
                                <strong style="color:#12a3eb">KHÁCH HÀNG MỚI</strong>
                                <div class="content">

                                    <p>Nếu chưa có tài khoản, bạn hãy đăng kí tài khoản tại đây</p>
                                    <div class="buttons-set" >
                                       <a href="singup"><button type="button" title="Create an Account" class="button create-account" ><span><span>ĐĂNG KÍ</span></span></button></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2 registered-users">
                                <strong style="color:#12a3eb">ĐĂNG NHẬP</strong>
                                <div class="content">
                                    <ul class="form-list">
                                        <li>
                                            <label for="email" >Tên đăng nhập<em class="required">*</em></label>
                                            <div class="input-box">
                                                <input ng-model="tk" ng-click="sua()" type="text" name="login[username]" value="" id="email" class="input-text required-entry validate-email" title="Email Address" />
                                            </div>
                                        </li>
                                        <li>
                                            <label for="pass">Mật khẩu<em class="required">*</em></label>
                                            <div class="input-box">
                                                <input ng-model="mk" type="password" name="login[password]" class="input-text required-entry validate-password" id="pass" title="Password" />
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="remember-me-popup">
                                        <div class="remember-me-popup-head" style="display:none">
                                            <h3 id="text2">What's this?</h3>
                                            <a href="#" class="remember-me-popup-close" onClick="showDiv()" title="Close">Close</a>
                                        </div>
                                        <div class="remember-me-popup-body" style="display:none">
                                            <p id="text1">Checking &quot;Remember Me&quot; will let you access your shopping cart on this computer when you are logged out</p>
                                            <div class="remember-me-popup-close-button a-right">
                                                <a href="#" class="remember-me-popup-close button" title="Close" onClick=" showDiv()"><span>Close</span></a>
                                            </div>
                                        </div>
                                    </div>                                  
                                    <p class="required">* Required Fields</p>
                                    <div class="buttons-set">

                                        <button ng-click="dangnhap(tk,mk)" type="submit" class="button login" title="Login" name="send" id="send2" ><span>ĐĂNG NHẬP</span></button>

                                        <a href="../forgotpassword/index.html" class="forgot-word">Forgot Your Password?</a>
                                    </div>
                                    <!--buttons-set-->
                                </div>
                                <!--content-->
                            </div>
                            <!--col-2 registered-users-->
                        </fieldset>
                        <!--col2-set-->
                    </form>
                    <script type="text/javascript">
                        //<![CDATA[
                        var dataForm = new VarienForm('login-form');
                        //]]>
                    </script>
                </div>
                <br><br><br>
                <!-- Exclude from version 3 -->
            </div>
            <!--main container-->

        </div>
        <!--main-container col1-layout-->
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
                                <h3>FREE SHIPPING WORLDWIDE</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-6">
                        <div class="feature-box"><span class="fa fa-headphones">&nbsp;</span>
                            <div class="content">
                                <h3>24X7 CUSTOMER SUPPORT</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-6">
                        <div class="feature-box"><span class="fa fa-share">&nbsp;</span>
                            <div class="content">
                                <h3>RETURNS AND EXCHANGE</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xs-12 col-sm-6">
                        <div class="feature-box last"><span class="fa fa-phone">&nbsp;</span>
                            <div class="content">
                                <h3>Hotline +(408) 394-7557</h3>
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
  
</body>

</html>