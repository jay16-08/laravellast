<!DOCTYPE html>
    <html lang="en">
    
        <head>
            <meta charset="UTF-8">
            <meta name="description" content="">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Title -->
            <title>Roberto - Hotel &amp; Resort HTML Template</title>
        
            <!-- Favicon -->
            <link rel="icon" href="./img/core-img/favicon.png">
        
            <!-- Stylesheet -->
            <link rel="stylesheet" href="style.css">
        
        </head>
        
        <body>
            <!-- Preloader -->
            <div id="preloader">
                <div class="loader"></div>
            </div>
            <!-- /Preloader -->
        
            <!-- Header Area Start -->
            <header class="header-area">
                <!-- Search Form -->
                <div class="search-form d-flex align-items-center">
                    <div class="container">
                        <form action="index.html" method="get">
                            <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                            <button type="submit"><i class="icon_search"></i></button>
                        </form>
                    </div>
                </div>
        
                <!-- Top Header Area Start -->
                <div class="top-header-area">
                    <div class="container">
                        <div class="row">
        
                            <!-- <div class="col-6">
                                <div class="top-header-content">
                                    <a href="#"><i class="icon_phone"></i> <span>(123) 456-789-1230</span></a>
                                    <a href="#"><i class="icon_mail"></i> <span>info.colorlib@gmail.com</span></a>
                                </div>
                            </div>
         -->
                            <!-- <div class="col-6">
                                <div class="top-header-content">
                                    <!-- Top Social Area -->
                                    <!-- <div class="top-social-area ml-auto">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-tripadvisor" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div> -->
         -->
                        </div>
                    </div>
                </div>
                <!-- Top Header Area End -->
        
                <!-- Main Header Start -->
                <div class="main-header-area">
                    <div class="classy-nav-container breakpoint-off">
                        <div class="container">
                            <!-- Classy Menu -->
                            <nav class="classy-navbar justify-content-between" id="robertoNav">
        
                                <!-- Logo -->
                                <h1>Hotelogix</h1>
                                <!-- <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a> -->
        
                                <!-- Navbar Toggler -->
                                <div class="classy-navbar-toggler">
                                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                                </div>
        
                                <!-- Menu -->
                                <div class="classy-menu">
                                    <!-- Menu Close Button -->
                                    <div class="classycloseIcon">
                                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                    </div>
                                    <!-- Nav Start -->
                                    <div class="classynav">
                                        <ul id="nav">
                                            <li class="active"><a href="./customerindex">Home</a></li>
                                            <li><a href="./customerroom">Rooms</a></li>
                                            <li><a href="./customerabout">About Us</a></li>
                                            <li><a href="./customerimage">Images</a></li>
                                            <li><a href="./bookingc">Booking</a></li>
                                            <li><a href="./history">History</a></li>
                                            <li class="dropdown user user-menu">
             
             <!-- <li class="user-footer">
               <a id="navbarDropdown"  data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre>
             -->
              <!--  {{ var_dump(Session::has('email'))}} -->
              <!--  {{ var_dump(Session::get('email'))}} -->
            <!--    {{Session::get('email')}} -->
               
            <!--  </a>
             </li>
             -->
                                            </li>
                                            <li><a href="./customercontact">Contact</a></li>
                                            <li><a>    {{Session::get('email')}}  </a></li>  
                                        </ul>
                                                         
                                        <!-- Search -->
                                       <div class="search-btn ml-4">
                                    <!--        <i class="fa fa-search" aria-hidden="true"></i>
                                        --></div>
                                            
                                         <!-- Book Now -->
                                        <div class="">
                                        <a class="" href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                     {!! csrf_field() !!}
                                  </form>
         
                                        </div>
                                    </div>
                                    <!-- Nav End -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <!-- Header Area End -->




            @yield('customer')




    <!-- Call To Action Area Start -->
    <section class="roberto-cta-area">
        <div class="container">
            <div class="cta-content bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
                <div class="row align-items-center">
                    <div class="col-12 col-md-7">
                        <div class="cta-text mb-50">
                            <h2>Contact us now!</h2>
                            <h6>Contact (+ 91) 9876543210  to book directly or for advice</h6>
                        </div>
                    </div>
                    <div class="col-12 col-md-5 text-right">
                        <a href="customercontact" class="btn roberto-btn mb-50">Contact Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Area End -->

    <!-- Partner Area Start -->
    <div class="partner-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="partner-logo-content d-flex align-items-center justify-content-between wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single Partner Logo -->
                       <!--  <a href="#" class="partner-logo"><img src="img/core-img/p1.png" alt=""></a> -->
                        <!-- Single Partner Logo -->
                       <!--  <a href="#" class="partner-logo"><img src="img/core-img/p2.png" alt=""></a> -->
                        <!-- Single Partner Logo -->
                       <!--  <a href="#" class="partner-logo"><img src="img/core-img/p3.png" alt=""></a> -->
                        <!-- Single Partner Logo -->
                      <!--   <a href="#" class="partner-logo"><img src="img/core-img/p4.png" alt=""></a> -->
                        <!-- Single Partner Logo -->
                       <!--  <a href="#" class="partner-logo"><img src="img/core-img/p5.png" alt=""></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-60-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row align-items-baseline justify-content-between">
                    <!-- Single Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-6">
                        <div class="single-footer-widget mb-80">
                            <!-- Footer Logo -->
                           <!--  <a href="#" class="footer-logo"><img src="img/core-img/logo2.png" alt=""></a> -->
                           <br><br> 
                           <h4>Hotelogix
                            </h4>
                            <h4>(+ 91) 9876543210</h4>
                            <span>hotelogix@gmail.com</span>
                            <span>Iskcon Cross Rd,Ramdev Nagar,Ahmedbad,Gujarat 380015</span>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <!-- <div class="col-12 col-sm-6 col-lg-3">
                        <div class="single-footer-widget mb-80">
                     -->        <!-- Widget Title -->
                           <!--  <h5 class="widget-title">Our Blog</h5> -->

                            <!-- Single Blog Area -->
                           <!--  <div class="latest-blog-area">
                                <a href="#" class="post-title">Freelance Design Tricks How</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02, 2019</span>
                            </div> -->

                            <!-- Single Blog Area -->
                          <!--   <div class="latest-blog-area">
                                <a href="#" class="post-title">Free Advertising For Your Online</a>
                                <span class="post-date"><i class="fa fa-clock-o" aria-hidden="true"></i> Jan 02, 2019</span>
                            </div>
                        </div>
                    </div> -->

                    <!-- Single Footer Widget Area -->
                    <div class="col-10 col-sm-4 col-lg-0">
                        <div class="single-footer-widget mb-80">
                            <!-- Widget Title -->
                            <br><br>
                            <h5 class="widget-title">Links</h5>

                            <!-- Footer Nav -->
                            <ul class="footer-nav">
                                <li class="active"><a href="./customerindex">Home</a></li>
                                    <li><a href="./customerroom">Rooms</a></li>
                                    <li><a href="./customerabout">About Us</a></li>
                                    <li><a href="./customerimage">Images</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Single Footer Widget Area -->
                    <!-- <div class="col-12 col-sm-8 col-lg-4">
                        <div class="single-footer-widget mb-80">
                     -->        <!-- Widget Title -->
                    <!--         <h5 class="widget-title">Subscribe Newsletter</h5>
                            <span>Subscribe our newsletter gor get notification about new updates.</span>
 -->
                            <!-- Newsletter Form -->
<!--                             <form action="index.html" class="nl-form">
                                <input type="email" class="form-control" placeholder="Enter your email...">
                                <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
 -->                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                    <div class="col-12 col-md-8">
                        <!-- Copywrite Text -->
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="js/default-assets/active.js"></script>

</body>

</html>