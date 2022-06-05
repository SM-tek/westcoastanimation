<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Dolunay - Creative Portfolio Multi-Purpose & Personal HTML Template">
    <meta name="keywords" content="Html, Css, jQuery, JavaScript, Dolunay, Multi-Purpose, responsive, personal, Portfolio, design, creative, template">

    <!-- Favicon -->

    <title>Contact-Us</title>

    <link rel="icon" href="assets/images/icon.png">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="../../css2.css?family=Roboto:wght@300;400;500;700;900&display=swap">
        <link rel="stylesheet" href="../../css2-1.css?family=Poppins:wght@300;400;500;600;700;800&display=swap">
        <!-- Site css -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/main.css">

	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/style.css">
        <style>
            label{
                font-size: 144%;
                color: black !important;
            }
            @media only screen and (max-device-width: 414px) {
    .header:before{
        height: 60% !important;
}
}
/* *{
    font-family: "Gemstone" !important;
} */
@media (min-width: 992px){
.col-lg-7 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 39.333333%;
    max-width: 58.333333%;
}}
.btn-primary {
    padding: 3% !important;
    border-radius: 7% !important;
    color: #fff !important;
    background-color: #712b75 !important;
    border-color: #712b75 !important;
    margin-left: 32%
}
nav ul, nav ol {
    margin: 18px;
    list-style: none;
}
@media (min-width: 992px){
.col-lg-5 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 41.666667%;
    flex: 1 0 41.666667% !important;
    max-width: 80.666667%;
}}
</style>



</head>

<body class="portfolio-page cursor-effect">

  <!--  <div id="cursor">
        <div id="circle"></div>
    </div>
-->

    <!-- Preloader Start Here -->


    <!-- Preloader End Here -->

    



        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        @include('components.header')
        <!--=====================================-->

        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================
        -->
        <header >
            <div class="dl-container">
                <div class="header-content">
                    <p class="subtitle" style="color: white; font-family: Rany-Bold;">Contact Us</p>
                    <h1 class="title" style="color: white">How can we help?</h1>
                </div>
            </div>
        </header>





        <section class="contact" style="font-family: MusticaPro-SemiBold">

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-12" style="background: url(/assets/images/usa.jpg) ; border-radius:3%; padding:3% ">

<!-- form code-->


@if(session()->has('message'))
<div class="alert alert-success" role="alert">
{{ session()->get('message') }}
</div>
@endif
                                <form  action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" required class="form-control" name="name" placeholder="John Doe" style="width: 98% !important;">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" required class="form-control" name="email" placeholder="example@mail.com" style="width: 98% !important;">
                                    </div>
                                    <div class="form-group mb--40">
                                        <label>Phone</label>
                                        <input type="tel" required class="form-control" name="phone" placeholder="+123456789" style="width: 98% !important;">
                                    </div>
                                    <div class="form-group mb--40">
                                        <label>How can we help you?</label>
                                        <textarea name="msg" required id="contact-message" class="form-control textarea" cols="30" rows="4" style="width: 98% !important;"></textarea>
                                    </div>


                                    <div class="form-group">
                                        <button type="submit" class="axil-btn btn-borderd btn-fluid btn-primary" name="submit-btn" style="">Get Pricing Now</button>
<img src="images/usa.jpg" alt="" width="100%" height="100%">
                                        <span class="btn-content d-flex align-items-center">
                                            <span class="btn-circles">
                                                <span class="btn-circle"></span>
                                                <span class="btn-small-circle d-flex">

                                                </span>
                                            </span>
                                            {{-- <span class="btn-txt">Send Message</span> --}}
                                    </span>


                                    </div>

                                </form>

                            </div>
                            <div class="col-lg-5 col-md-12">
                                <div class="contact-boxes" style="background: url(/assets/images/palmtree.jpg) left center;">
                                    <div class="contact-box">
                                        <div class="content-box">
                                            <h5 style="text-align: left">Visit Our Office</h5>
                                            <p>
                                                2619 Wilshire Blvd,<br>
                                                Los Angeles, CA 90057
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-box">
                                        <div class="content-box">
                                            <h5 style="text-align: left">Call Us Anytime</h5>
                                            <p>
                                                +1213 478 2978 <br>
                                                +1213 478 2978
                                            </p>
                                        </div>
                                    </div>
                                    <div class="contact-box">
                                        <div class="content-box">
                                            <h5 style="text-align: left">Request A Quote</h5>
                                            <p>
                                                <a href="#" style="color: #000000" >westcoastanimations@gmail.com</a><br>
                                                <a href="#" style="color: #000000" >info@westcoastanimations.com</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </section>



    </section>


   @include('components.footer')


    <div class="progress-parent">
        <svg class="progress-circle" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
    </div>



    <!-- Jquery Js -->
            <script type="text/javascript">
            var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
            (function(){
            var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
            s1.async=true;
            s1.src='https://embed.tawk.to/628f3789b0d10b6f3e741d9c/1g3vn1tac';
            s1.charset='UTF-8';
            s1.setAttribute('crossorigin','*');
            s0.parentNode.insertBefore(s1,s0);
            })();
            document.querySelector('.eapps-link').remove();
            </script>
     <!-- Jquery -->
     <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.2.1.min.js"></script>
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
     <!-- Preloader -->
     <script src="assets/js/preloader.js"></script>
     <!-- Scroll To Top js -->
     <script src="assets/js/scrolltotop.js"></script>
     <!-- Main custom-->
     <script src="assets/js/custom.js"></script>


    <!-- Site Scripts -->
    <script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery_albums_slider.js"></script>
	<script src="js/jquery.event.swipe.js"></script>
	<script src="js/index.js"></script>

</body>

</html>
