<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Dolunay - Creative Portfolio Multi-Purpose & Personal HTML Template">
        <meta name="keywords" content="Html, Css, jQuery, JavaScript, Dolunay, Multi-Purpose, responsive, personal, Portfolio, design, creative, template">

        <!-- Title -->
        <title>Portfolio</title>
        <!-- Favicon -->
        <link rel="icon" href="assets/images/icon.png">
        <!-- Google Fonts -->
        <link rel="stylesheet" href="../../css2.css?family=Roboto:wght@300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="../../css2-1.css?family=Poppins:wght@300;400;500;600;700;800&display=swap">
        <!-- Site css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/main.css">
        

	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/style.css">
        <style>
                        @media only screen and (max-device-width: 414px) {
                .header:before{
                    height: 60% !important;
    }
}
            *{

            }
            nav ul, nav ol {
    margin: 18px;
    list-style: none;
}
            </style>

        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="portfolio-page work-style2 cursor-effect">

        <!-- ========== Start Cursor ========== 

        <div id="cursor">
            <div id="circle"></div>
        </div>
-->
        <!-- ========== End Cursor ========== -->

         <!-- ========== Start Preloader ========== -->


         <!-- ========== End Preloader ========== -->

        <!-- ========== Start Navbar ========== -->
@include('components.header')

        <!-- ========== End Navbar ========== -->

        <!-- ========== Start Header ========== -->

        <header >
            <div class="dl-container">
                <div class="header-content">
                    <p class="subtitle" style="color:white;font-family: Rany-Bold;">Our Portfolio</p>
                    <h1 class="title" style="color:white">Our Best Works</h1>
                </div>
            </div>
        </header>

        <!-- ========== End Header ========== -->

        <div class="content">

            <!-- ========== Start Portfolio Section ========== -->

            <section class="portfolio">
                <div class="container portfolio-container">
                    <div class="portfolio-filter">
                        <div class="filter-wrap d-flex align-items-center">
                            <!-- <div class="filter">
                                <button type="button" data-filter="*" class="active">All</button>
                                <button type="button" data-filter=".photography">Photography</button>
                                <button type="button" data-filter=".architecture">Architecture</button>
                                <button type="button" data-filter=".product">Product</button>
                                <button type="button" data-filter=".pen">Pen</button>
                            </div> -->
                        </div>
                    </div>
                    <!-- Portfolio Items Starts -->
                    <div class="portfolio-content">
                        <div class="grid row">
                            <!-- Portfolio Item Starts -->
                         <!--   <div class="grid__item over-hidden architecture col-12 col-md-6">
                                <a href="{{route('animation2d')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls autoplay loop muted>
                                        <source src="assets/images/works/2dd1.mp4" type="video/mp4">
                                        <source src="assets/images/works/2dd1.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>2D</h5>
                                    <a class="cursor-alter" href="{{route('animation2d')}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div> -->
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                          <!--  <div class="grid__item architecture col-12 col-md-6">
                                <a  href="{{route('animation3d')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls autoplay loop muted>
                                        <source src="assets/images/works/3d2.mp4" type="video/mp4">
                                        <source src="assets/images/works/3d2.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                              <div class="item-info">
                                    <h5>3d</h5>
                                    <a class="cursor-alter" href="{{route('animation3d')}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div> -->
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                        <!--    <div class="grid__item photography col-12 col-md-6">
                                <a  href="{{route('screencast')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls autoplay loop muted>
                                        <source src="assets/images/works/scc1.mp4" type="video/mp4">
                                        <source src="assets/images/works/scc1.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Screencast</h5>
                                    <a class="cursor-alter" href="{{route('screencast')}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div> -->
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                         <!--   <div class="grid__item product col-12 col-md-6">
                                <a  href="{{route('illustration')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls autoplay loop muted>
                                        <source src="assets/images/works/il3.mp4" type="video/mp4">
                                        <source src="assets/images/works/il3.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Illustration</h5>
                                    <a class="cursor-alter" href="{{route('illustration')}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div> -->
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                           <!-- <div class="grid__item photography col-12 col-md-6">
                                <a  href="{{route('explainer')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls autoplay loop muted>
                                        <source src="assets/images/works/ep3.mp4" type="video/mp4">
                                        <source src="assets/images/works/ep3.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Explainer</h5>
                                    <a class="cursor-alter" href="{{route('explainer')}}">
                                        <h4>Videos</h4>
                                    </a>
                                </div>
                            </div> -->
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                          <!-- <div class="grid__item pen product col-12 col-md-6">
                                <a  href="{{route('typography')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls autoplay loop muted>
                                        <source src="assets/images/works/t3.mp4" type="video/mp4">
                                        <source src="assets/images/works/t3.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Typography</h5>
                                    <a class="cursor-alter" href="{{route('typography')}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div> -->
                           <!-- <div class="grid__item pen product col-12 col-md-6">
                                <a  href="{{route('logo')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls autoplay loop muted>
                                        <source src="assets/images/works/la1.mp4" type="video/mp4">
                                        <source src="assets/images/works/la1.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Logo</h5>
                                    <a class="cursor-alter" href="{{route('typography')}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div> -->
                       <!--     <div class="grid__item pen product col-12 col-md-6">
                                <a  href="{{route('whiteboard')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls autoplay loop muted>
                                        <source src="assets/images/works/wh1.mp4" type="video/mp4">
                                        <source src="assets/images/works/wh1.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>White-Board</h5>
                                    <a class="cursor-alter" href="{{route('whiteboard')}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div>  -->


                           <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a >
                                <video width="205%" height="110%" style="object-fit: fill;" controls autoplay loop muted >
                                    <source src="assets/images/works/2d1.mp4" type="video/mp4">
                                    <source src="assets/images/works/2d1.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>2D</h5>
                                <a class="cursor-alter" href="{{route('animation2d')}}">
                                    <h4>Animation</h4>
                                </a>
                            </div>
                        </div>

                            <!-- Portfolio Item Ends -->

                        </div>

                    </div>

                       <!--                        <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a >
                                <video width="211%" height="110%" style="object-fit: fill; margin-top: 7%; margin-left:-3%" controls autoplay loop muted >
                                    <source src="assets/images/works/3d2.mp4" type="video/mp4">
                                    <source src="assets/images/works/3d2.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>Commercial</h5>
                                <a class="cursor-alter" href="{{route('whiteboard')}}">
                                    <h4>Video</h4>
                                </a>
                            </div>
                        </div>
                                                                       <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a >
                                <video width="211%" height="110%" style="object-fit: fill; margin-top: 14%; margin-left:-3%" controls autoplay loop muted >
                                    <source src="assets/images/works/2d1.mp4" type="video/mp4">
                                    <source src="assets/images/works/2d1.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>Commercial</h5>
                                <a class="cursor-alter" href="{{route('whiteboard')}}">
                                    <h4>Video</h4>
                                </a>
                            </div>
                        </div>
                                                                                               <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a >
                                <video width="211%" height="110%" style="object-fit: fill; margin-top: 20%; margin-left:-3%" controls autoplay loop muted >
                                    <source src="assets/images/works/2d1.mp4" type="video/mp4">
                                    <source src="assets/images/works/2d1.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>Commercial</h5>
                                <a class="cursor-alter" href="{{route('whiteboard')}}">
                                    <h4>Video</h4>
                                </a>
                            </div>
                        </div>
                                                                                               <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a >
                                <video width="211%" height="110%" style="object-fit: fill; margin-top: 27%; margin-left:-3%" controls autoplay loop muted >
                                    <source src="assets/images/works/2d1.mp4" type="video/mp4">
                                    <source src="assets/images/works/2d1.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>Commercial</h5>
                                <a class="cursor-alter" href="{{route('whiteboard')}}">
                                    <h4>Video</h4>
                                </a>
                            </div>
                        </div>
                                                                                               <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a >
                                <video width="211%" height="110%" style="object-fit: fill; margin-top: 34%; margin-left:-3%" controls autoplay loop muted >
                                    <source src="assets/images/works/2d1.mp4" type="video/mp4">
                                    <source src="assets/images/works/2d1.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>Commercial</h5>
                                <a class="cursor-alter" href="{{route('whiteboard')}}">
                                    <h4>Video</h4>
                                </a>
                            </div>
                        </div>
                                                                                               <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a >
                                <video width="211%" height="110%" style="object-fit: fill; margin-top: 40%; margin-left:-3%" controls autoplay loop muted >
                                    <source src="assets/images/works/2d1.mp4" type="video/mp4">
                                    <source src="assets/images/works/2d1.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>Commercial</h5>
                                <a class="cursor-alter" href="{{route('whiteboard')}}">
                                    <h4>Video</h4>
                                </a>
                            </div>
                        </div>
                                                                                               <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a href="{{route('illustration')}}">
                                <video width="211%" height="120%" style="object-fit: fill; margin-top: 46%; margin-left:-3%" controls autoplay loop muted >
                                    <source src="assets/images/works/2d1.mp4" type="video/mp4">
                                    <source src="assets/images/works/2d1.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>Commercial</h5>
                                <a class="cursor-alter" href="{{route('whiteboard')}}">
                                    <h4>Video</h4>
                                </a>
                            </div>
                        </div> -->


                              <!--  <video width="211%" height="160%" style="object-fit: fill; margin-top: 46%; margin-left:-3%" controls autoplay loop muted >
                                    <source src="assets/images/works/2d1.mp4" type="video/mp4">
                                    <source src="assets/images/works/2d1.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video> -->
                            </a>
                          <!--  <div class="item-info">
                                <h5>Commercial</h5>
                                <a class="cursor-alter" href="{{route('whiteboard')}}">
                                    <h4>Video</h4>
                                </a> -->

                            <div class="portfolio-content" style="
    margin-top: 4%;
">
                        <div class="grid row">
                            <!-- Portfolio Item Starts -->
                            <div class="grid__item over-hidden architecture col-12 col-md-6">
                                <a href="{{route('animation3d')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls="" autoplay="" loop="" muted="">
                                        <source src="assets/images/works/3d1.mp4" type="video/mp4">
                                        <source src="assets/images/works/3d1.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>3D</h5>
                                    <a class="cursor-alter" href="{{route('animation3d')}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                            <div class="grid__item architecture col-12 col-md-6">
                                <a href="{{route('screencast')}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls="" autoplay="" loop="" muted="">
                                        <source src="assets/images/works/sc2.mp4" type="video/mp4">
                                        <source src="assets/images/works/sc2.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                              <div class="item-info">
                                    <h5>ScreenCast</h5>
                                    <a class="cursor-alter" href="{{route('screencast')}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div>
                           <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a >
                                <video width="205%" height="110%" style="object-fit: fill;" controls autoplay loop muted >
                                    <source src="assets/images/works/il2.mp4" type="video/mp4">
                                    <source src="assets/images/works/il2.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>Illustration</h5>
                                <a class="cursor-alter" href="{{route('illustration')}}">
                                    <h4>Animation</h4>
                                </a>
                            </div>
                        </div>




                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->







                            <!-- Portfolio Item Ends -->

                        </div>

                    </div>
                    <div class="portfolio-content" style="
    margin-top: 4%;
">
                        <div class="grid row">
                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <div class="grid__item pen product col-12 col-md-6">
                                <a href="{{route("explainer")}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls="" autoplay="" loop="" muted="">
                                        <source src="assets/images/works/ep1.mp4" type="video/mp4">
                                        <source src="assets/images/works/ep1.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Explainer</h5>
                                    <a class="cursor-alter" href="{{route("explainer")}}">
                                        <h4>Videos</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__item pen product col-12 col-md-6">
                                <a href="{{route("typography")}}">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls="" autoplay="" loop="" muted="">
                                        <source src="assets/images/works/t2.mp4" type="video/mp4">
                                        <source src="assets/images/works/t2.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Typography</h5>
                                    <a class="cursor-alter" href="{{route("typography")}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div>


                           <div class="grid__item pen product col-12 col-md-6" style="flex: 0 0 100% !important;">
                            <a>
                                <video width="205%" height="110%" style="object-fit: fill;" controls="" autoplay="" loop="" muted="">
                                    <source src="assets/images/works/la1.mp4" type="video/mp4">
                                    <source src="assets/images/works/la1.mp4" type="video/ogg">
                                    Your browser does not support the video tag.
                                  </video>
                            </a>
                            <div class="item-info">
                                <h5>Logo</h5>
                                <a class="cursor-alter" href="{{route("logo")}}">
                                    <h4>Animation</h4>
                                </a>
                            </div>
                        </div>

                            <!-- Portfolio Item Ends -->

                        </div>

                    </div>
                                        <div class="portfolio-content" style="
    margin-top: 4%;
">
                        <div class="grid row">
                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->

                            <div class="grid__item pen product col-12 col-md-6">
                                <a href="https://test.westcoastanimations.com/whiteboard">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls="" autoplay="" loop="" muted="">
                                        <source src="assets/images/works/wh1.mp4" type="video/mp4">
                                        <source src="assets/images/works/wh1.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>WhiteBoard</h5>
                                    <a class="cursor-alter" href="{{route("whiteboard")}}">
                                        <h4>Animation</h4>
                                    </a>
                                </div>
                            </div>
                            <div class="grid__item pen product col-12 col-md-6">
                                <a href="https://test.westcoastanimations.com/whiteboard">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls="" autoplay="" loop="" muted="">
                                        <source src="assets/images/slider/FINAL VIDEO.mp4" type="video/mp4">
                                        <source src="assets/images/slider/FINAL VIDEO.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Commercial</h5>
                                    <a class="cursor-alter" href="https://test.westcoastanimations.com/whiteboard">
                                        <h4>Video</h4>
                                    </a>
                                </div>
                            </div>



                            <!-- Portfolio Item Ends -->

                        </div>

                    </div>
                        </div>

                    <!-- Portfolio Items Ends -->

                </div>


            </section>



            <!-- ========== End Portfolio Section ========== -->

            <!-- ========== Start Contact Us Section ========== -->

            <!-- ========== End Contact Us Section ========== -->

        </div>

        <!-- ========== Start Footer Section ========== -->

       @include('components.footer')
        <!-- ========== End Footer Section ========== -->

        <!-- ========== Start Scroll To Top Section ========== -->

        <div class="progress-parent">
            <svg class="progress-circle" width="100%" height="100%" viewbox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
        </div>

        <!-- ========== End Scroll To Top Section ========== -->

        <!-- ========== Js ========== -->

        <!-- Jquery -->

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery_albums_slider.js"></script>
        <script src="js/jquery.event.swipe.js"></script>
        <script src="js/index.js"></script>
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <!-- popper -->
        <script src="assets/js/popper.min.js"></script>
        <!-- Bootstrap js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Libs and Plugins JS -->
		<script src="assets/js/gsap/gsap.min.js"></script>
		<script src="assets/js/gsap/ScrollToPlugin.min.js"></script>
		<script src="assets/js/gsap/ScrollTrigger.min.js"></script>
        <!-- Owl Carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Magnific Popup js -->
        <script src="assets/js/magnific-popup.min.js"></script>
        <!-- Isotope js -->
        <script src="assets/js/isotope.min.js"></script>
        <!-- Preloader -->
        <script src="assets/js/preloader.js"></script>
        <!-- Scroll To Top js -->
        <script src="assets/js/scrolltotop.js"></script>
        <!-- Main custom-->
        <script src="assets/js/custom.js"></script>

    </body>

</html>
