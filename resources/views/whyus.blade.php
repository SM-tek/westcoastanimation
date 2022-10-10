<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=a93ef8d6-8a88-420b-9ff9-955801aba3d5"> </script>
<!-- End of  Zendesk Widget script -->
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
       <meta name="keywords" content="westcoast animations, westcoast, animations, animation, , westcoast animation, westcoast logo, westcoast animation style, illustrations, Portfolio, design, creative">

        <!-- Title -->
        <title>Why Us - Westcoast Animations</title>
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
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        
        <style>
            @media only screen and (max-device-width: 414px) {
                .header:before{
                    height: 60% !important;
    }

}
        /* *{
            font-family: "Gemstone" !important;
        } */
        /* .header:before{
              background: url(../images/patrn.gif);
        } */
        nav ul, nav ol {
    margin: 18px;
    list-style: none;
}


.section-home{
  position: relative;
  min-height: 100vh;
  background: url(bg.jpg)no-repeat;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

.section-home:before{
  content: '';
  position: absolute;
  background: linear-gradient(to top, #23252B, transparent);
  width: 100%;
  height: 80px;
  bottom: 0;
}

.section-home h1{
  color: #fff;
  font-size: 10vw;
  font-weight: 800;
  text-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  opacity: 0.3;
}

.section-two{
  min-height: 100vh;
  background: #23252B;
}

.section-two h2{
  color: #fff;
  font-size: 3em;
  font-weight: 700;
  margin: 30px 0;
}

.section-two p{
  color: #fff;
  font-size: 1em;
  margin: 30px 0;
}

header{
font-family:'Rany-Bold';
  z-index: 999;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
      background-color: #0006 !important;
    opacity: 0.9 !important;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
  padding: 0 100px;
  transition: 0.6s;
}

header .logo{
  color: #fff;
  font-size: 1.8em;
  font-weight: 700;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 2px;
}

header .navigation{
  position: relative;
  line-height: 75px;
  transition: 0.6s;
  transition-property: line-height;
}

header.sticky .navigation{
  line-height: 60px;
}

header .navigation .menu{
  position: relative;
  display: flex;
  justify-content: center;
  list-style: none;
  user-select: none;
}

.menu-item > a{
  color: #fff;
  font-size: 1em;
  text-decoration: none;
  margin: 20px;
  padding: 25px 0;
}

.menu-item > a:hover{
  color: #469DFF;
  transition: 0.3s;
}

.menu-item .sub-menu{
  position: absolute;
  background: #23252B;
  top: 74px;
  line-height: 40px;
  list-style: none;
  border-radius: 0 0 8px 8px;
  box-shadow: 0 5px 25px rgb(0 0 0 / 20%);
 /* pointer-events: none; */
  transform: translateY(20px);
  opacity: 0;
  transition: 0.3s;
  transition-property: transform, opacity;
}

header.sticky .menu-item .sub-menu{
  top: 60px;
}

.menu-item:hover .sub-menu{
  pointer-events: all;
  transform: translateY(0);
  opacity: 1;
}

.menu-item .sub-menu .sub-item{
  position: relative;
  padding: 7px 0;
  cursor: pointer;
  box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
}

.menu-item .sub-menu .sub-item a{
  color: #fff;
  font-size: 1em;
  text-decoration: none;
  padding: 15px 30px;
}

.menu-item .sub-menu .sub-item:hover{
  background: #4080EF;
}

.menu-item .sub-menu .sub-item:last-child:hover{
  border-radius: 0 0 8px 8px;
}

.more .more-menu{
  position: absolute;
  background: #23252B;
  list-style: none;
  top: 0;
  left: 100%;
  white-space: nowrap;
  border-radius: 0 8px 8px 8px;
  overflow: hidden;
/*  pointer-events: none; */
  transform: translateY(20px);
  opacity: 0;
  transition: 0.3s;
  transition-property: transform, opacity;
}

.more:hover .more-menu{
  pointer-events: all;
  transform: translateY(0);
  opacity: 1;
}

.more .more-menu .more-item{
  padding: 7px 0;
  box-shadow: inset 0px -30px 5px -30px rgba(255, 255, 255, 0.2);
  transition: 0.3s;
}

.more .more-menu .more-item:hover{
  background: #4080EF;
}

.menu-btn{
  display: none;
}

@media (max-width: 1060px){
  header .navigation .menu{
    position: fixed;
    display: block;
    background: #23252b;
    min-width: 350px;
    height: 100vh;
    top: 0;
    right: -100%;
    padding: 90px 50px;
    visibility: hidden;
    overflow-y: auto;
    transition: 0.5s;
    transition-property: right, visibility;
  }

  header.sticky .navigation{
    line-height: 75px;
  }

  header .navigation .menu.active{
    right: 0;
    visibility: visible;
  }

  .menu-item{
    position: relative;
  }

  .menu-item .sub-menu{
    opacity: 1;
    position: relative;
    top: 0;
    transform: translateX(10px);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    overflow: hidden;
    display: none;
  }

  header.sticky .menu-item .sub-menu{
    top: 0;
  }

  .menu-item:hover .sub-menu{
    transform: translateX(10px);
  }

  .menu-item .sub-menu .sub-item{
    box-shadow: none;
  }

  .menu-item .sub-menu .sub-item:hover{
    background: none;
  }

  .menu-item .sub-menu .sub-item a:hover{
    color: #4080EF;
    transition: 0.3s;
  }

  .more .more-menu{
    opacity: 1;
    position: relative;
    left: 0;
    transform: translateY(0);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 5px;
    display: none;
  }

  .more .more-menu .more-item{
    box-shadow: none;
  }

  .more .more-menu .more-item:hover{
    background: none;
  }

  .more .more-menu .more-item a{
    margin-left: 20px;
  }

  .close-btn{
    position: absolute;
    background: url(close.png)no-repeat;
    width: 40px;
    height: 40px;
    background-size: 25px;
    background-position: center;
    top: 0;
    left: 0;
    margin: 25px;
    cursor: pointer;
  }

  .menu-btn{
    background: url(menu.png)no-repeat;
    width: 40px;
    height: 40px;
    background-size: 30px;
    background-position: center;
    cursor: pointer;
    display: block;
  }

  header{
    padding: 15px 20px;
  }

  header.sticky{
    padding: 10px 20px;
  }
}

.hamburger{
display:none;
cursor:pointer;
}
.bar{
display:block;
width:25px;
height:3px;
margin: 5px auto;
-webkit-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
background-color: white;
}

@media(max-width:1060px){
.hamburger{
display:block;
margin-left:90%;
}
.hamburger.active .bar:nth-child(2){
opacity: 0;
}
.hamburger.active .bar:nth-child(1){
transform: translateY(8px) rotate(45deg);
}
.hamburger.active .bar:nth-child(3){
transform: translateY(-8px) rotate(-45deg);
}
.menu{
position:fixed;
left:-100%;
top:70px;
gap:0;
flex-direction: column;
background-color: #262626;
width:100%;
text-align:center;
transition:0.3s;
}
.menu-item.active{
margin:16px 0;
}
.menu.active{
left:0;
}
}

        </style>

        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body class="about-page cursor-effect">

        <!-- ========== Start Cursor ==========

        <div id="cursor">
            <div id="circle"></div>
        </div> -->

        <!-- ========== End Cursor ========== -->

        <!-- ========== Start Preloader ========== -->


        <!-- ========== End Preloader ========== -->

        <!-- ========== Start Navbar ========== -->
<!--
<header class="photty_header">
    <div class="row ">
        <div class="col col-12 photty_def_header">
            <div class="photty_logo_cont">
                <a href="{{route("index")}}" class="photty_image_logo">
                </a>
            </div>
            <nav class="photty_menu_cont"  >
                <ul id="menu-main-menu" class="photty_menu">
                    <li class="menu-item"><a href="{{route("index")}}" id="hm" >Home</a></li>
                    <li class="menu-item "><a href="{{route("services")}}" id="sv" >Services 
                    </a>
                <ul class="sub-menu">
                            <li class="menu-item photty_sub_menu_active"><a href="{{route("animation2d")}}">2D Animation</a></li>
                            <li class="menu-item "><a href="{{route("animation3d")}}">3D Animation</a></li>
                            <li class="menu-item"><a href="{{route("explainer")}}">Explainer</a></li>
                            <li class="menu-item"><a href="{{("illustration")}}">Illustration</a></li>
                            <li class="menu-item"><a href="{{route("screencast")}}">Screencast</a></li>
                            <li class="menu-item"><a href="{{route("logo")}}">Logo Animation</a></li>
                            <li class="menu-item"><a href="{{route("typography")}}">Typography</a></li>
                            <li class="menu-item"><a href="{{route("whiteboard")}}">Whiteboard</a></li>
                            <li class="menu-item"><a href="{{route("commercial")}}">Commercial</a></li>
                        </ul>    
                    </li>
                    <li class="menu-item"><a href="{{route("portfolio")}}" id="pf" >Portfolio</a>
                        <!--<ul class="sub-menu">
                            <li class="menu-item"><a href="blog-grid.html">Grid</a></li>
                            <li class="menu-item"><a href="blog-fullwidth.html">Fullwidth</a></li>
                            <li class="menu-item"><a href="blog-left-sidebar.html">With Left Sidebar</a></li>
                            <li class="menu-item"><a href="blog-right-sidebar.html">With Right sidebar</a></li>
                            <li class="menu-item"><a href="#">Blog Posts<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                <ul class=" sub-menu1">
                                    <li class="menu-item"><a href="blog-single-post.html">Standard Post</a></li>
                                    <li class="menu-item"><a href="blog-single-post-image.html">Image Post</a></li>
                                    <li class="menu-item"><a href="blog-single-post-video.html">Video Post</a></li>
                                    <li class="menu-item"><a href="blog-single-post-audio.html">Audio Post</a></li>
                                    <li class="menu-item"><a href="blog-single-post-quote.html">Quote Post</a></li>
                                </ul>
                            </li>
                        </ul>-->
                    </li>

                        <!--<ul class="sub-menu">
                            <li class="menu-item "><a href="typography.html">Typography</a></li>
                            <li class="menu-item"><a href="boxed-layout.html">Boxed Layout</a></li>
                            <li class="menu-item"><a href="stripes-fullscreen.html">Photographers</a></li>
                            <li class="menu-item"><a href="404.html">404 Page</a></li>
                            <li class="menu-item"><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
            <div class="clear"></div>
        </div>
        <div class="mobile_header ">
            <a href="{{route("index")}}" class="photty_image_logo"></a>
            <a href="javascript:void(0)" class="btn_mobile_menu">
                <span class="photty_menu_line1"></span>
                <span class="photty_menu_line2"></span>
                <span class="photty_menu_line3"></span>
            </a>
        </div>
    </div>
</header>
-->
<header>
      
      <div class="navigation">
        <ul class="menu">
          <div class="close-btn"></div>
          <li class="menu-item"><a href="{{route("index")}}">Home</a></li>
          <!--
          <li class="menu-item">
            <a class="sub-btn" href="#">Dropdown <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item"><a href="#">Sub Item 01</a></li>
              <li class="sub-item"><a href="#">Sub Item 02</a></li>
              <li class="sub-item"><a href="#">Sub Item 03</a></li>
            </ul>
          </li>
          -->
          
          <li class="menu-item">
            <a class="sub-btn" href="#">Services <i class="fas fa-angle-down"></i></a>
            <ul class="sub-menu">
              <li class="sub-item more">
                <a class="more-btn" href="#">Development <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
              <li class="more-item"><a href="{{route("webdevelopment")}}">Web Development</a></li>
              <li class="more-item"><a href="{{route("appdevelopment")}}">App Development</a></li>
              <li class="more-item"><a href="{{route("software")}}">Software Development</a></li>
                </ul>
              </li>
              <li class="sub-item more">
                <a class="more-btn" href="#">Design <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
              <li class="more-item"><a href="{{route("graphic")}}">Graphics Design</a></li>
              <li class="more-item"><a href="{{route("brand")}}">Brand Identity</a></li>
              <li class="more-item"><a href="{{route("uiux")}}">UI/UX Design</a></li>
                </ul>
              </li>
              <li class="sub-item more">
                <a class="more-btn" href="#">Marketing <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
              <li class="more-item"><a href="{{route("social")}}">Social Media Marketing</a></li>
                </ul>
              </li>
              
              <li class="sub-item more">
                <a class="more-btn" href="#">Animations <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
              <li class="more-item"><a href="{{route("animation2d")}}">2D Animation</a></li>
              <li class="more-item"><a href="{{route("animation3d")}}">3D Animation</a></li>
              <li class="more-item"><a href="{{route("explainer")}}">Explainer</a></li>
              <li class="more-item"><a href="{{("illustration")}}">Illustration</a></li>
              <li class="more-item"><a href="{{route("screencast")}}">Screencast</a></li>
              <li class="more-item"><a href="{{route("logo")}}">Logo Animation</a></li>
              <li class="more-item"><a href="{{route("typography")}}">Typography</a></li>
              <li class="more-item"><a href="{{route("whiteboard")}}">Whiteboard</a></li>
              <li class="more-item"><a href="{{route("commercial")}}">Commercial</a></li>
                </ul>
              </li> 
                                                        <li class="sub-item more">
                <a class="more-btn"  href="{{route("videoediting")}}">Video Editing</a>
              </li> 
            </ul>
          </li>
          <li class="menu-item"><a href="{{route("portfolio")}}">Portfolio</a></li>
          <li class="menu-item"><a href="{{route("whyus")}}">Why Us</a></li>
          <li class="menu-item"><a href="{{route("contact")}}">Contact</a></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>
        
                <!-- ========== End Navbar ========== -->
        
                <!-- ========== Start Header Follow ========== -->
        
                {{-- <div class="header-follow">
                    <ul class="social">
                                    <li >
                            <a class="cursor-alter" href="#0" ><img src="assets/images/bark.png" style="max-width: 113%;" alt=""></a>
                        </li>
                        <li >
                            <a class="cursor-alter" href="#0" ><img src="assets/images/download.png" style="max-width: 113%;" alt=""></a>
                        </li>
                        <li >
                            <a class="cursor-alter" href="https://www.facebook.com/WestcoastAnimation/"><img src="assets/images/fb.webp" style="max-width: 113%;" alt=""></a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="https://www.linkedin.com/company/westcoastanimation/"><img src="assets/images/174857.png" style="max-width: 113%;" alt=""></a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="https://www.instagram.com/westcoastanimations/"><img src="assets/images/Instagram_icon.webp" style="max-width: 113%;" alt=""></a>
                        </li>
                    </ul>
                    <p id="fo" style="font-family: Rany-Bold !important;">Follow Us</p>
                </div> --}}
        
        <!-- ========== End Navbar ========== -->

        <!-- ========== Start Header ========== -->

        <div class="header">
            <div class="dl-container">
                {{-- <div class="header-content">
                    <p class="subtitle">About Us</p>
                    <h1 class="title" style="color: white">Bringing You Quality Animations  <br> With Worldwide Specialists.</h1>
                </div> --}}
            </div>
        </div>

        <!-- ========== End Header ========== -->

      <!--  <div class="content">
            <div class="header-image"></div>
-->
            <!-- ========== Start About Section ========== -->

            <section class="about">
                <div class="container d-flex flex-column mb-70">
                    <p class="sub-heading" style="font-family: MusticaPro-SemiBold">Who We Are</p>
                    <h1 class="heading" style="font-family: Rany-Bold">

                        Our award-winning animation team is made up of smart, talented and remarkably nice people. We are expert animators, voiceover actors and illustrators located across the U.S. with offices in Baltimore, MD and Minneapolis, MN.
                        
                        Explainer animations are increasingly recognized as one of the best ways to communicate, allowing your audience to absorb your message through visuals, sound and text simultaneously.
                        </h1>
                </div>
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="left-area" style="font-family: MusticaPro-SemiBold">
                                <p>We have a talented team of video producers, animators, editors, and highly competent directors to overview your work. We aim to provide creative animations for your brand to stand apart from the lot. Considering you as a family member, we provide perfect and timely results! Providing graphical illustrations to light up your business prominence and to deliver design-oriented, digital solutions to our clients. Using our innovative and imaginative techniques, we put life into your work and make it fit for the digital world..</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-area" style="font-family: MusticaPro-SemiBold">
                                <p>Westcoast Animations is known for delivering exceptional quality illustrations at highly affordable rates. Each of our projects is the result of coordination, technical know-how and creative genius. Our goal is to speak not just to the minds but also to the emotions of those viewing our work.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </section>

            <!-- ========== End About Section ========== -->


            <!-- ========== Start Facts Section ========== -->

            <section class="facts">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left-area">
                                <div class="d-flex flex-column mb-70">
                                    <p class="sub-heading" style="font-family: MusticaPro-SemiBold">Our Vision</p>
                                    <h2 class="heading" style="font-family: MusticaPro-SemiBold">Here's how the Magic Happens</h2>
                                </div>
                                <div class="facts-wrap">
                                    <div class="accordion-content">
                                        <div class="accordion-item">
                                            <div class="accordion-head current d-flex align-items-center">
                                                <div class="accordion-caret-wrap">
                                                    <div class="accordion-caret parallax-item"></div>
                                                </div>
                                                <span class="fact-number" style="font-family: MusticaPro-SemiBold">01</span>
                                                <h4 class="fact-title" style="font-family: MusticaPro-SemiBold">Makes You Heard</h4>
                                            </div>
                                            <div class="accordion-body active" style="font-family: MusticaPro-SemiBold">
                                                <p>The secret behind the best animation is its script. Our team of writers are experts in the industry and write unique and original scripts to convey your brand story.</p>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-head d-flex align-items-center">
                                                <div class="accordion-caret-wrap">
                                                    <div class="accordion-caret parallax-item"></div>
                                                </div>
                                                <span class="fact-number" style="font-family: MusticaPro-SemiBold">02</span>
                                                <h4 class="fact-title" style="font-family: MusticaPro-SemiBold">Voice Over</h4>
                                            </div>
                                            <div class="accordion-body">
                                                <p style="font-family: MusticaPro-SemiBold">Next, we find a voice over artist that will resonate with your target audience and brand identity. A professional voice over artist makes the animations come alive!</p>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <div class="accordion-head d-flex align-items-center">
                                                <div class="accordion-caret-wrap">
                                                    <div class="accordion-caret parallax-item"></div>
                                                </div>
                                                <span class="fact-number" style="font-family: MusticaPro-SemiBold">03</span>
                                                <h4 class="fact-title" style="font-family: MusticaPro-SemiBold">Storyboard Animation</h4>
                                            </div>
                                            <div class="accordion-body">
                                                <p style="font-family: MusticaPro-SemiBold">We make the first storyboard of the animation to visualize what it will look like. Our expert animators work hard to ensure it meets your brief and vision.</p>
                                            </div>
                                        </div>
                                       <div class="accordion-item">
                                            <div class="accordion-head d-flex align-items-center">
                                                <div class="accordion-caret-wrap">
                                                    <div class="accordion-caret parallax-item"></div>
                                                </div>
                                                <span class="fact-number" style="font-family: MusticaPro-SemiBold">04</span>
                                                <h4 class="fact-title" style="font-family: MusticaPro-SemiBold">Final Delivery</h4>
                                            </div>
                                            <div class="accordion-body" style="font-family: MusticaPro-SemiBold">
                                                <p>Finally, we deliver the complete project to you and eagerly await your feedback. We want our creative process to be as collaborative as possible.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right-area">
                                <div class="image-wrap">
                                    <img class="img-cover img-fluid" src="assets/images/facts.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== End Facts Section ========== -->

            <!-- ========== Start Testimonials Section ==========

            <section class="testimonials">
                <div class="container d-flex flex-column mb-70">
                    <p class="sub-heading">Feedback</p>
                    <h2 class="heading">What Clients Say</h2>
                </div>
                <div class="container">
                    <div class="testimonials-items owl-carousel">
                        <div class="testimonial-item d-flex">
                            <div class="testimonial-image">
                                <div class="img-pattern">
                                    <img class="img-fluid" src="assets/images/testimonials/pattern.jpg" alt="">
                                </div>
                                <div class="image-box">
                                    <img class="img-fluid" src="assets/images/testimonials/01.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-quote">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="59" viewbox="0 0 82 79" fill="none">
                                    <path d="M20.6258 36.5H1V1H36.7301V37.3128L20.9472 78H5.98811L21.5581 37.8617L22.0863 36.5H20.6258Z" stroke="#bbb" stroke-width="2"></path>
                                    <path d="M64.8957 36.5H45.2699V1H81V37.3128L65.2172 78H50.2581L65.828 37.8617L66.3562 36.5H64.8957Z" stroke="#bbb" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="testimonial-details">
                                <div class="testimonial-author">
                                    <h4>Alex Smith</h4>
                                    <h5>Marketing Manager</h5>
                                </div>
                                <p class="testimonial-text">"Beautiful minimalist design! Very good quality. This template is incredible beautiful, I love it! It's fully customizable, well coded, fast and responsive, fast response with support. I wish the team all success!"</p>
                            </div>
                        </div>
                        <div class="testimonial-item d-flex">
                            <div class="testimonial-image">
                                <div class="img-pattern">
                                    <img class="img-fluid" src="assets/images/testimonials/pattern.jpg" alt="">
                                </div>
                                <div class="image-box">
                                    <img class="img-fluid" src="assets/images/testimonials/02.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-quote">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="59" viewbox="0 0 82 79" fill="none">
                                    <path d="M20.6258 36.5H1V1H36.7301V37.3128L20.9472 78H5.98811L21.5581 37.8617L22.0863 36.5H20.6258Z" stroke="#bbb" stroke-width="2"></path>
                                    <path d="M64.8957 36.5H45.2699V1H81V37.3128L65.2172 78H50.2581L65.828 37.8617L66.3562 36.5H64.8957Z" stroke="#bbb" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="testimonial-details">
                                <div class="testimonial-author">
                                    <h4>Silvia Palian</h4>
                                    <h5>Graphic Design</h5>
                                </div>
                                <p class="testimonial-text">"Working with Dolunay has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you!"</p>
                            </div>
                        </div>
                        <div class="testimonial-item d-flex">
                            <div class="testimonial-image">
                                <div class="img-pattern">
                                    <img class="img-fluid" src="assets/images/testimonials/pattern.jpg" alt="">
                                </div>
                                <div class="image-box">
                                    <img class="img-fluid" src="assets/images/testimonials/03.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-quote">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="59" viewbox="0 0 82 79" fill="none">
                                    <path d="M20.6258 36.5H1V1H36.7301V37.3128L20.9472 78H5.98811L21.5581 37.8617L22.0863 36.5H20.6258Z" stroke="#bbb" stroke-width="2"></path>
                                    <path d="M64.8957 36.5H45.2699V1H81V37.3128L65.2172 78H50.2581L65.828 37.8617L66.3562 36.5H64.8957Z" stroke="#bbb" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="testimonial-details">
                                <div class="testimonial-author">
                                    <h4>Karim Salim</h4>
                                    <h5>Web Design</h5>
                                </div>
                                <p class="testimonial-text">"Beautiful minimalist design! Very good quality. This template is incredible beautiful, I love it! It's fully customizable, well coded, fast and responsive, fast response with support. I wish the team all success!"</p>
                            </div>
                        </div>
                        <div class="testimonial-item d-flex">
                            <div class="testimonial-image">
                                <div class="img-pattern">
                                    <img class="img-fluid" src="assets/images/testimonials/pattern.jpg" alt="">
                                </div>
                                <div class="image-box">
                                    <img class="img-fluid" src="assets/images/testimonials/04.png" alt="">
                                </div>
                            </div>
                            <div class="testimonial-quote">
                                <svg xmlns="http://www.w3.org/2000/svg" width="62" height="59" viewbox="0 0 82 79" fill="none">
                                    <path d="M20.6258 36.5H1V1H36.7301V37.3128L20.9472 78H5.98811L21.5581 37.8617L22.0863 36.5H20.6258Z" stroke="#bbb" stroke-width="2"></path>
                                    <path d="M64.8957 36.5H45.2699V1H81V37.3128L65.2172 78H50.2581L65.828 37.8617L66.3562 36.5H64.8957Z" stroke="#bbb" stroke-width="2"></path>
                                </svg>
                            </div>
                            <div class="testimonial-details">
                                <div class="testimonial-author">
                                    <h4>Touria Elwafi</h4>
                                    <h5>Project Management</h5>
                                </div>
                                <p class="testimonial-text">"Working with Dolunay has been a pleasure. Better yet - I alerted them of a minor issue before going to sleep. The issue was fixed the next morning. I couldn't ask for better support. Thank you!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            ========== End Testimonials Section ========== -->

            <!-- ========== Start Team Section ========== -->

            <section class="teams">
                <div class="container d-flex flex-column mb-70">
                    <p class="sub-heading" style="font-family: MusticaPro-SemiBold">Our Team</p>
                    <h2 class="heading" style="font-family: MusticaPro-SemiBold">The best team ever!</h2>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-12 item">
                            <div class="team-item-wrap">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-cover img-fluid" src="assets/images/team/01.jpg" alt="">
                                    </div>
                                    <div class="team-details">
                                        <h4>Karim Smith</h4>
                                        <h5>Creative Director</h5>
                                    </div>
                                    <div class="team-social-icons">
                                        <span><a href="#0">FB</a></span>
                                        <span><a href="#0">TW</a></span>
                                        <span><a href="#0">LN</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 item">
                            <div class="team-item-wrap">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-cover img-fluid" src="assets/images/team/02.jpg" alt="">
                                    </div>
                                    <div class="team-details">
                                        <h4>Hasnaa Najmi</h4>
                                        <h5>Web Designer</h5>
                                    </div>
                                    <div class="team-social-icons">
                                        <span><a href="#0">FB</a></span>
                                        <span><a href="#0">TW</a></span>
                                        <span><a href="#0">LN</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-12 item">
                            <div class="team-item-wrap">
                                <div class="team-item">
                                    <div class="team-img">
                                        <img class="img-cover img-fluid" src="assets/images/team/03.jpg" alt="">
                                    </div>
                                    <div class="team-details">
                                        <h4>Karim Smith</h4>
                                        <h5>Creative Director</h5>
                                    </div>
                                    <div class="team-social-icons">
                                        <span><a href="#0">FB</a></span>
                                        <span><a href="#0">TW</a></span>
                                        <span><a href="#0">LN</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ========== End Team Section ========== -->

            <!-- ========== Start Clients Section ==========

            <section class="clients">
                <div class="container d-flex flex-column mb-70">
                    <p class="sub-heading">Our clients</p>
                    <h2 class="heading">Brands We Worked For</h2>
                </div>
                <div class="container">
                    <ul class="clients-wrap list-unstyled">
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/01.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/02.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/03.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/07.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/05.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/06.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/07.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/01.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/02.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="cursor-alter" href="about.html">
                                <img class="img-fluid" src="assets/images/clients/03.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </section>

             ========== End Clients Section ========== -->

            <!-- ========== Start Contact Us Section ========== -->
            <div style="margin: 06%">
            <script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-d87e82a3-8c2e-489a-ad9d-043c77fdcb0a"></div></div>
            <div style="margin: 06%; display:flex; flex-direction:row">
                       <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FWestcoastAnimations&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=395874058884657" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                       

                  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-7d5371a4-c1b5-4181-9cd6-3d2d1b5bf442"></div>                 </div>


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
      <!--  <script type="text/javascript">
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
            </script> -->
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
        <!-- Preloader -->
        <script src="assets/js/preloader.js"></script>
        <!-- Scroll To Top js -->
        <script src="assets/js/scrolltotop.js"></script>
        <!-- Main custom-->
        <script src="assets/js/custom.js"></script>

  <script type="text/javascript">
    //jquery for toggle dropdown menus
    $(document).ready(function(){
      //toggle sub-menus
      $(".sub-btn").click(function(){
        $(this).next(".sub-menu").slideToggle();
      });

      //toggle more-menus
      $(".more-btn").click(function(){
        $(this).next(".more-menu").slideToggle();
      });
    });

    //javascript for the responsive navigation menu
    var menu = document.querySelector(".menu");
    var menuBtn = document.querySelector(".menu-btn");
    var closeBtn = document.querySelector(".close-btn");

    menuBtn.addEventListener("click", () => {
      menu.classList.add("active");
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove("active");
    });

    //javascript for the navigation bar effects on scroll
    window.addEventListener("scroll", function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    });
    </script>
    
    
        <script>
    const hamburger = document.querySelector(".hamburger");
    const navMenu = document.querySelector(".menu");
    
    hamburger.addEventListener("click", ()=> {
      hamburger.classList.toggle("active");
      navMenu.classList.toggle("active");
    })

    </script>

    </body>

</html>