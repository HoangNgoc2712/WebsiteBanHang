<!DOCTYPE html>
<html lang="en" ng-app="myapp" ng-controller="khachhangcontroller">

<head>
    @include('includes.head')
      <script src="/JS/angular.min.js"></script>
      <script src="/JS/dirPagination.js"></script>
      <script src="/JS/khachhangcontroller.js"> </script> 
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
                            <h2>ĐĂNG KÍ TÀI KHOẢN</h2>
                        </div>

                        <form  method="post" id="form-validate" class="scaffold-form" enctype="multipart/form-data">
                            <fieldset class="col2-set">
                                <input type="hidden" name="success_url" value="" />
                                <input type="hidden" name="error_url" value="" />
                                <input type="hidden" name="form_key" value="p2jN824F7Jwc4fEa" />

                                <div class="col-1 new-users">
                                    <strong style="color:#12a3eb">THÔNG TIN KHÁCH HÀNG</strong>
                                    <div class="content">
                                        <ul class="form-list">
                                            <li class="fields">

                                                <div class="customer-name">
                                                    <div class="input-box name-firstname">
                                                        <label for="firstname">Họ và Tên<span class="required">*</span></label>
                                                        <div class="input-box1">
                                                            <input ng-model="khach.ten_kh" type="text" id="firstname" name="firstname" value="" title="First Name" maxlength="255" class="input-text required-entry" />
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="input-box name-lastname">
                                                        <label for="lastname">Địa chỉ<span class="required">*</span></label>
                                                        <div class="input-box1">
                                                            <input ng-model="khach.dia_chi" type="text" id="lastname" name="lastname" value="" title="Last Name" maxlength="255" class="input-text required-entry" />
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="input-box name-lastname">
                                                        <label for="lastname">SĐT<span class="required">*</span></label>
                                                        <div class="input-box1">
                                                            <input ng-model="khach.sdt" type="text" id="lastname" name="lastname" value="" title="Last Name" maxlength="255" class="input-text required-entry" />
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <label for="email_address" class="required"><em>*</em>Email Address</label>
                                                <div class="input-box">
                                                    <input ng-model="khach.email" type="email" autocapitalize="off" autocorrect="off" spellcheck="false" name="email" id="email_address" value="" title="Email Address" class="input-text validate-email required-entry" />
                                                    
                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <!--content-->
                                </div>
                                <!--col-1 new-users-->

                                <div class="col-2 registered-users">
                                    <strong style="color:#12a3eb">THÔNG TIN ĐĂNG NHẬP</strong>
                                    <div class="content">
                                        <ul class="form-list">
                                            <li class="fields">
                                                <div class="field">
                                                    <label for="password" class="required"><em>*</em>Tên đăng nhập</label>
                                                    <div class="input-box">
                                                        <input ng-model="khach.users_name" type="text" name="username" id="password" title="Password" class="input-text required-entry validate-password" />
                                                       
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label for="confirmation" class="required"><em>*</em>Mật khẩu</label>
                                                    <div class="input-box">
                                                        <input ng-model="khach.password" type="password" name="confirmation" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword" />
                                                       
                                                    </div>
                                                </div>
                                                <div class="field">
                                                    <label for="confirmation" class="required"><em>*</em>Nhập lại mật khẩu</label>
                                                    <div class="input-box">
                                                        <input ng-model="khach.password" type="password" name="confirmation" title="Confirm Password" id="confirmation" class="input-text required-entry validate-cpassword" />
                                                       
                                                    </div>
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
                                                    <a href="#" class="remember-me-popup-close button" title="Close" onClick="showDiv()"><span>Close</span></a>
                                                </div>
                                            </div>
                                        </div>
                                                                    
                                    </div>
                                    <!--content-->
                                    <div class="buttons-set">
                                    
                                        <button type="submit" title="Register" ng-click="saveData()" class="button"><span><span>ĐĂNG KÍ</span></span></button>
                                        <a class="forgot-word" href="login" class="back-link"><small>&laquo; </small>Back</a>
                                    </div>
                                </div>
                                <!--col-2 registered-users-->

                            </fieldset>
                        </form>
                        <!-- <script type="text/javascript">
                            //<![CDATA[
                            var dataForm = new VarienForm('form-validate', true);
                            //]]>
                        </script> -->
                    </div>



                    <!-- Exclude from version 3 -->
                </div>
                <!--main container-->

            </div>
        
        <!--main-container col1-layout-->
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