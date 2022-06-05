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
        <title>Whiteboard-Animation</title>
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
                    <p class="subtitle" style="color: white; font-family: Rany-Bold;">White-Board Portfolio</p>
                    <h1 class="title" style="color: white">Our Best Works</h1>
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
                            <!--<div class="filter">
                                <button type="button" data-filter="*" class="active">All</button>
                                <button type="button" data-filter=".photography">Photography</button>
                                <button type="button" data-filter=".architecture">Architecture</button>
                                <button type="button" data-filter=".product">Product</button>
                                <button type="button" data-filter=".pen">Pen</button>
                            </div>-->
                        </div>
                    </div>
                    <!-- Portfolio Items Starts -->
                    <div class="portfolio-content">
                        <div class="grid row">
                            <!-- Portfolio Item Starts -->
                            <!--<div class="grid__item over-hidden architecture col-12 col-md-6">-->
                                <a class="not-hide-cursor d-block">
                                    <video width="100%" height="100%" style="object-fit: fill; margin-left:1.3%;" controls >
                                        <source src="assets/images/works/wh1.mp4" type="video/mp4">
                                        <source src="assets/images/works/wh1.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                               <!-- <div class="item-info">
                                    <h5>Architecture</h5>
                                    <a class="cursor-alter" href="project1.html">
                                        <h4>Phone Case</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                          <!--  <div class="grid__item architecture col-12 col-md-6">-->
                                <a class="not-hide-cursor d-block">
                                    <video width="100%" height="100%" style="object-fit: fill; margin-top:1%;" controls>
                                        <source src="assets/images/works/wh2.mp4" type="video/mp4">
                                        <source src="assets/images/works/wh2.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                              <!--<div class="item-info">
                                    <h5>Architecture</h5>
                                    <a class="cursor-alter" href="project2.html">
                                        <h4>Red Sofa</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                            <!--  <div class="grid__item photography col-12 col-md-6">-->
                              <a class="not-hide-cursor d-block">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/wh3.mp4" type="video/mp4">
                                        <source src="assets/images/works/wh3.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                      <!-- <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/04.mp4" type="video/mp4">
                                        <source src="assets/images/works/04.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                      <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/05.mp4" type="video/mp4">
                                        <source src="assets/images/works/05.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                      <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/06.mp4" type="video/mp4">
                                        <source src="assets/images/works/06.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>  -->
                                </a>
                               <!-- <div class="item-info">
                                    <h5>Photography</h5>
                                    <a class="cursor-alter" href="project3.html">
                                        <h4>Sleep Walker</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                          <!--  <div class="grid__item product col-12 col-md-6">
                                <a class="not-hide-cursor d-block">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/04.mp4" type="video/mp4">
                                        <source src="assets/images/works/04.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Product</h5>
                                    <a class="cursor-alter" href="project4.html">
                                        <h4>New Sound</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                         <!--   <div class="grid__item photography col-12 col-md-6">-->
                                <!--  <div class="grid__item architecture col-12 col-md-6">
                                    <a class="not-hide-cursor d-block">
                                        <video width="100%" height="100%" style="object-fit: fill;" controls>
                                            <source src="assets/images/works/02.mp4" type="video/mp4">
                                            <source src="assets/images/works/02.mp4" type="video/ogg">
                                            Your browser does not support the video tag.
                                          </video>
                                    </a>
                                  <div class="item-info">
                                        <h5>Architecture</h5>
                                        <a class="cursor-alter" href="project2.html">
                                            <h4>Red Sofa</h4>
                                        </a>
                                    </div>-->
                                </div>
                            <!-- Portfolio Item Ends -->

                            <!-- Portfolio Item Starts -->
                            <!--<div class="grid__item pen product col-12 col-md-6">
                                <a class="not-hide-cursor d-block">
                                    <video width="100%" height="100%" style="object-fit: fill;" controls>
                                        <source src="assets/images/works/06.mp4" type="video/mp4">
                                        <source src="assets/images/works/06.mp4" type="video/ogg">
                                        Your browser does not support the video tag.
                                      </video>
                                </a>
                                <div class="item-info">
                                    <h5>Pen | Product</h5>
                                    <a class="cursor-alter" href="project6.html">
                                        <h4>Colorful Pen</h4>
                                    </a>
                                </div>-->
                            </div>
                            <!-- Portfolio Item Ends -->

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
