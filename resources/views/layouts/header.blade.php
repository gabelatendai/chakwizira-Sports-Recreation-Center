<!DOCTYPE html>
<html lang="en">
<head>
    @foreach($settings as $setting)
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#151515">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#151515">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#151515">
    <title>CSRC</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="{{$setting->image}}">
    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="{{'css/responsive.css'}}">
    <!-- Theme-Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{asset('css/color.css')}}">


    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>

    <script src="{{asset('assets/vendor/html5shiv.js')}}"></script>
    <script src="{{asset('assets/vendor/respond.js')}}"></script>
    <![endif]-->
</head>

<body>
<div class="main-page-wrapper">

    <!-- ===================================================
        Loading Transition
    ==================================================== -->
    <div id="loader-wrapper">
        <div id="loader"></div>
    </div>

    <!-- ==================== Style Switcher ==================== -->
    <div class="switcher">
        <!-- Switcher button -->
        <div class="switch-btn">
            <button><i class="fa fa-cog fa-spin"></i></button>
        </div>

        <!-- switcher body -->
        <div class="switch-menu">
            <h5 class="title">Style Switcher</h5>
            <!-- Theme color changer -->
            <div class="switcher-container">
                <h5>Color Skins</h5>
                <ul id="styleOptions" title="Switch Color" class="clearfix">
                    <li><a href="javascript: void(0)" data-theme="color" class="color1"></a></li>
                    <li><a href="javascript: void(0)" data-theme="color-2" class="color2"></a></li>
                    <li><a href="javascript: void(0)" data-theme="color-3" class="color3"></a></li>
                    <li><a href="javascript: void(0)" data-theme="color-4" class="color4"></a></li>
                    <li><a href="javascript: void(0)" data-theme="color-5" class="color5"></a></li>
                </ul>
            </div>
        </div> <!-- /switch-menu -->
    </div> <!-- /.switcher -->



    <!--
    =============================================
        Theme Header
    ==============================================
    -->
    <header class="theme-main-header theme-header-one">
        <div class="top-header">
            <div class="container clearfix">
                <p class="float-left email-us">Email us at : <a href="mailto:info@negozuonsultancy.com">{{$setting->email}}</a></p>
                <p class="float-right call-us">Call us for any questions : <a href="{{$setting->pnumber}}">{{$setting->pnumber}}</a></p>
            </div> <!-- /.container -->
        </div> <!-- /.top-header -->

        <div class="theme-menu-wrapper">
            <div class="container">
                <div class="inner-wrapper clearfix">
                    <!-- ================= Logo ==================== -->
                    <div class="logo"><a href="{{'/'}}"><img src="{{$setting->image}}" height="70px" width="80px" alt="logo"></a></div>
                    <!-- ============== Menu Warpper ================ -->
                    <div class="menu-wrapper float-right">
                        <nav id="mega-menu-holder" class="clearfix">

                            <ul class="clearfix">
                                <li class="active"><a href="#">Home</a>
                                    <ul class="dropdown">
                                        <li><a href="{{'/'}}">Home version one</a></li>
                                        <li><a href="{{'/index-2'}}">Home version two</a></li>
                                    </ul>
                                </li>
                                <li ><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{'/about'}}">About us</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                                <li><a href="#">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="{{'/services'}}">Service</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Our Team</a>
                                    <ul class="dropdown">
                                        <li><a href="{{'/our-team'}}">Our Team</a></li>
                                        <!--<li><a href="project-full-width.html">project Fullwidth</a></li>
                                        <li><a href="project-details.html">Project details</a></li>-->
                                    </ul>
                                </li>
                                <li><a href="#">News</a>
                                    <ul class="dropdown">
                                        <li><a href="{{'/blog'}}">Blog Classic</a></li>
                                        <li><a href="{{'/blog-grid'}}">Blog Grid</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Portfolio</a>
                                    <ul class="dropdown">
                                        <li><a href="{{'portfolio'}}">Portfolio Version One</a></li>
                                        <li><a href="{{'/portfolio2'}}">Portfolio Version two</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{'/contact'}}">contact</a></li>
                            </ul>
                        </nav> <!-- /#mega-menu-holder -->
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.inner-wrapper -->
            </div> <!-- /.container -->
        </div> <!-- /.theme-menu-wrapper -->
    </header> <!-- /.theme-main-header -->



@yield('content')
    <footer class="theme-footer-one">
        <div class="container">
            <div class="top-footer">
                <div class="logo"><a href="{{'/'}}"><img src="{{$setting->image}}" width="80px" height="60px" alt="logo"></a></div>
                <ul class="clearfix">
                    <li>
                        <i class="icon flaticon-smartphone"></i>
                        <h6>Get us on ;</h6>
                        <a href="#">{{$setting->pnumber}}</a>
                    </li>
                    <li>
                        <i class="icon flaticon-message"></i>
                        <h6>Send us on ;</h6>
                        <a href="#">{{$setting->email}}</a>
                    </li>
                </ul>
            </div> <!-- /.top-footer -->
        </div> <!-- /.container -->

        <div class="main-footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 about-widget">
                        <h6 class="title">About Us</h6>
                        <p>{{$setting->about}}</p>
                        <h6 class="title">Address</h6>
                        <p>{{$setting->address}}</p>
                    </div> <!-- /.about-widget -->

                    <div class="col-lg-2 col-sm-6 list-widget">
                        <h6 class="title">Extra links</h6>
                        <ul>
                            <li><a href="{{'/'}}">Home</a></li>
                            <li><a href="{{'/about'}}">About Us</a></li>
                            <li><a href="{{'/services'}}">Services</a></li>
                            <li><a href="{{'/blog'}}">News</a></li>
                            <li><a href="{{'/portfolio'}}">Portfolio</a></li>
                            <li><a href="{{'contact'}}">Contacts</a></li>
                        </ul>
                    </div> <!-- /.list-widget -->

                    <div class="col-lg-4 col-md-6 col-12 comment-widget">
                        <h6 class="title">Recent News</h6>
                        <ul>
                            @foreach($recent as $recen)
                            <li class="clearfix">
                                <img src="{{$recen->image}}" alt="">
                                <div class="text">
                                    <p><a href="{{route('news',['slug'=>$recen->slug])}}">{{$recen->title}}</a></p>
                                    <div class="date"><i class="icon flaticon-clock"></i>{{$recen->created_at->diffForHumans()}}</div>
                                </div>
                            </li>
                           @endforeach
                        </ul>
                    </div> <!-- /.comment-widget -->

                    <div class="col-lg-3 col-md-6 col-12 subscribe-widget">
                        <h6 class="title">Subscribe Us</h6>
                        <form action="#">
                            <input type="email" placeholder="Email Address">
                            <button><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                        </form>
                        <p>Signup for our mailing list to get latest updates and news.</p>
                        <ul class="social-icon">
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                        </ul>
                    </div> <!-- /.subscribe-widget -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-footer-widget -->

        <div class="bottom-footer">
            <div class="container">
                <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> Chakwizira Sports & Recreation Centre</p>
            </div>
        </div> <!-- /.bottom-footer -->
    </footer> <!-- /.theme-footer -->




    <!-- Scroll Top Button -->
    <button class="scroll-top tran3s">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </button>



    <!-- Optional JavaScript _____________________________  -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- jQuery -->
    <script src="{{asset('assets/vendor/jquery.2.2.3.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('assets/vendor/popper.js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- Style-switcher  -->
    <script src="{{asset('assets/vendor/jQuery.style.switcher.min.js')}}"></script>
    <!-- Camera Slider -->
    <script src='{{asset('assets/vendor/Camera-master/scripts/jquery.mobile.customized.min.js')}}'></script>
    <script src='{{asset('assets/vendor/Camera-master/scripts/jquery.easing.1.3.js')}}'></script>
    <script src='{{asset('assets/vendor/Camera-master/scripts/camera.min.js')}}'></script>
    <!-- menu  -->
    <script src="{{asset('assets/vendor/menu/src/js/jquery.slimmenu.js')}}"></script>
    <!-- WOW js -->
    <script src="{{asset('assets/vendor/WOW-master/dist/wow.min.js')}}"></script>
    <!-- owl.carousel -->
    <script src="{{asset('assets/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
    <!-- js count to -->
    <script src="{{asset('assets/vendor/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/vendor/jquery.countTo.js')}}"></script>
    <!-- Fancybox -->
    <script src="{{asset('assets/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>

    <!-- Theme js -->
    <script src="{{asset('js/theme.js')}}"></script>
</div> <!-- /.main-page-wrapper -->
</body>
</html>
@endforeach