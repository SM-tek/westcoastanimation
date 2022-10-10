<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Start of  Zendesk Widget script -->
<script id="ze-snippet" src="https://static.zdassets.com/ekr/snippet.js?key=a93ef8d6-8a88-420b-9ff9-955801aba3d5"> </script>
<!-- End of  Zendesk Widget script -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="westcoast animations, westcoast, animations, animation, , westcoast animation, westcoast logo, westcoast animation style, illustrations, Portfolio, design, creative">
	<link href="../../../css.css?family=Roboto:300,400,700" rel="stylesheet">
	<link href="../../../css-1.css?family=Poppins:300,400,700" rel="stylesheet">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Services - Westcoast Animations</title>

	<link rel="stylesheet" href="css/kube.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
 <style>
 .photty_header{
 height:0% !important;
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
font-family: 'Rany-Bold';
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
  pointer-events: none;
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

	<!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5G6PPWB');</script>
  <!-- End Google Tag Manager -->
</head>

<body class="photty_albums_slider_page" style="background: url(assets/images/patrn.jpg) no-repeat fixed!important; background-size:cover !important; background-position: center center !important;">
	<div class="photty">
		<div class="photty">
			<div class="photty"></div>
		</div>
	</div>
 
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
              <li class="sub-item"><a href="{{route("animation2d")}}">2D Animation</a></li>
              <li class="sub-item"><a href="{{route("animation3d")}}">3D Animation</a></li>
              <li class="sub-item"><a href="{{route("explainer")}}">Explainer</a></li>
              <li class="sub-item"><a href="{{("illustration")}}">Illustration</a></li>
              <!--
              <li class="sub-item more">
                <a class="more-btn" href="#">More Items <i class="fas fa-angle-right"></i></a>
                <ul class="more-menu">
                  <li class="more-item"><a href="#">More Item 01</a></li>
                  <li class="more-item"><a href="#">More Item 02</a></li>
                </ul>
              </li> -->
            </ul>
          </li>
          <li class="menu-item"><a href="{{route("portfolio")}}">Portfolio</a></li>
          <li class="menu-item"><a href="{{route("whyus")}}">Why Us</a></li>
          <li class="menu-item"><a href="{{route("contact")}}">Contact</a></li>
        </ul>
      </div>
      <div class="menu-btn"></div>
    </header>

 
	<header class="photty_header">
		<div class="row ">
			<div class="col col-12 photty_def_header">
	
				<div class="clear"></div>
			</div>
			<div class="mobile_header ">
				<a href="index.html" class="photty_image_logo"></a>
				<a href="javascript:void(0)" class="btn_mobile_menu">
					<span class="photty_menu_line1"></span>
					<span class="photty_menu_line2"></span>
					<span class="photty_menu_line3"></span>
				</a>
			</div>
		</div>
	</header>




	<div class="photty_albums_slider_wrapper" style="margin-top:86px;" >
		<div class="photty_albums_slider_inner" >
			<div class="photty_albums_slide photty_albums_slide1 photty_albums_slide_item1" data-count="1" >
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/3d.jpg">
					<div class="photty_albums_slide_content" style="opacity:1;">
						<h1 class="photty_albums_slide_title" style="color:white; font-size: 20px">3D-Animation</h1>
						<div class="photty_albums_slide_categ"></div>
					</div>
					<a href="{{route("animation3d")}}"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide1 photty_albums_slide_item2" data-count="1" >
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/2d.jfif" >
					<div class="photty_albums_slide_content" style="opacity:1;">
						<h5 class="photty_albums_slide_title">2D-Animation</h5>
						<div class="photty_albums_slide_categ"> </div>
					</div>
					<a href="{{route("animation2d")}}"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide1 photty_albums_slide_item3" data-count="1">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/exp.jpg">
					<div class="photty_albums_slide_content" style="opacity:1;">
						<h5 class="photty_albums_slide_title">Explainer-Videos</h5>
						<div class="photty_albums_slide_categ"> </div>
					</div>
					<a href="{{route("explainer")}}"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide2 photty_albums_slide_item1" data-count="2">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/ils.jpg">
					<div class="photty_albums_slide_content" style="opacity:1;">
						<h5 class="photty_albums_slide_title">Illustrations</h5>
						<div class="photty_albums_slide_categ"></div>
					</div>
					<a href="{{("illustration")}}"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide2 photty_albums_slide_item2" data-count="2">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/screen.jpg">
					<div class="photty_albums_slide_content" style="opacity:1;">
						<h5 class="photty_albums_slide_title" style="color: black !important;">ScreenCast</h5>
						<div class="photty_albums_slide_categ"></div>
					</div>
					<a href="{{route("screencast")}}"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide2 photty_albums_slide_item3" data-count="2">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/logo.jpg">
					<div class="photty_albums_slide_content" style="opacity:1;">
						<h5 class="photty_albums_slide_title">Logo</h5>
						<div class="photty_albums_slide_categ"></div>
					</div>
					<a href="{{route("logo")}}"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide3 photty_albums_slide_item1" data-count="3">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/typo.jpg">
					<div class="photty_albums_slide_content" style="opacity:1;">
						<h5 class="photty_albums_slide_title">Typography</h5>
						<div class="photty_albums_slide_categ"></div>
					</div>
					<a href="{{route("typography")}}"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide3 photty_albums_slide_item2" data-count="3">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/board.jpg">
					<div class="photty_albums_slide_content" style="opacity:1;">
						<h5 class="photty_albums_slide_title" style="color: black !important;">WhiteBoard-Animation</h5>
						<div class="photty_albums_slide_categ"></div>
					</div>
					<a href="{{route("whiteboard")}}"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide3 photty_albums_slide_item3" data-count="3">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/comer.jfif">
					<div class="photty_albums_slide_content" style="opacity:1;">
						<h5 class="photty_albums_slide_title">Commercial-Videos</h5>
						<div class="photty_albums_slide_categ"></div>
					</div>
					<a href="{{route("commercial")}}"></a>
				</div>
			</div>
		<!--	<div class="photty_albums_slide photty_albums_slide4 photty_albums_slide_item1" data-count="4">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/09.jpg">
					<div class="photty_albums_slide_content">
						<h5 class="photty_albums_slide_title">Fresh Portraits</h5>
						<div class="photty_albums_slide_categ">People / Portrait </div>
					</div>
					<a href="album-single.html"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide4 photty_albums_slide_item2" data-count="4">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/10.jpg">
					<div class="photty_albums_slide_content">
						<h5 class="photty_albums_slide_title">Vintage</h5>
						<div class="photty_albums_slide_categ">Fashion / Portrait </div>
					</div>
					<a href="album-single.html"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide4 photty_albums_slide_item3" data-count="4">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/12.jpg">
					<div class="photty_albums_slide_content">
						<h5 class="photty_albums_slide_title">Hot Summertime</h5>
						<div class="photty_albums_slide_categ">Events / People </div>
					</div>
					<a href="album-single.html"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide5 photty_albums_slide_item1" data-count="5">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/04.jpg">
					<div class="photty_albums_slide_content">
						<h5 class="photty_albums_slide_title">Girl Portrait</h5>
						<div class="photty_albums_slide_categ">Portrait </div>
					</div>
					<a href="album-single.html"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide5 photty_albums_slide_item2" data-count="5">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/02.jpg">
					<div class="photty_albums_slide_content">
						<h5 class="photty_albums_slide_title">Beauty In Hat</h5>
						<div class="photty_albums_slide_categ">Fashion / Portrait </div>
					</div>
					<a href="album-single.html"></a>
				</div>
			</div>
			<div class="photty_albums_slide photty_albums_slide5 photty_albums_slide_item3" data-count="5">
				<div class="photty_albums_slide_inner photty_js_bg_image" data-src="img/01.jpg">
					<div class="photty_albums_slide_content">
						<h5 class="photty_albums_slide_title">Walking Down The Streets</h5>
						<div class="photty_albums_slide_categ">Events </div>
					</div>
					<a href="album-single.html"></a>
				</div>
			</div>
		</div>-->
		<div data-slides="3" class="photty_albums_slider_meta"></div>
	</div>
	<a href="javascript:void(0)" class="photty_albums_btn_prev" ></a>
	<a href="javascript:void(0)" class="photty_albums_btn_next"></a>
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery_albums_slider.js"></script>
	<script src="js/jquery.event.swipe.js"></script>
	<script src="js/index.js"></script>


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