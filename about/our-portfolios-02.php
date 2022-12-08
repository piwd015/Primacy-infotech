
<link rel="stylesheet" href="../assets/css/animate.css">
<link rel="stylesheet" href="../assets/css/lightcase.css">
<link rel="stylesheet" href="../assets/css/simple-line-icons.css">
<link rel="stylesheet" href="../assets/css/ElegantIcons.css">
<link rel="stylesheet" href="../assets/css/swiper.min.css">
<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/home-3-style.css">
<link rel="stylesheet" href="../assets/css/home-4-style.css">
<link rel="stylesheet" href="../assets/css/home-5-style.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/icofont/icofont.min.css">
<link href="https://fonts.googleapis.com/css?family=Cabin|Montserrat&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="../css/readmore.css">
<link rel="stylesheet" href="../assets/css/responsive.css">
<script src="../unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>
<style>
section{padding: 50px 0;}
.gallery-title{
font-size: 36px;
color: #3F6184;
text-align: center;
font-weight: 500;
margin-bottom: 70px;}
.filter-button{
font-size: 18px;
border: 2px solid #3F6184!important;
padding:5px 10px;
text-align: center;
color: #3F6184!important;
margin-bottom: 30px;
background:transparent;
cursor:pointer;}
.filter-button:hover,
.filter-button:focus,
.filter-button.active{
color: #ffffff!important;
background-color:#3F6184;
outline:none;}
.gallery_product{
margin: 0px;
padding:0;
position:relative;}
.gallery_product .img-info{
position: absolute;
background: rgba(0,0,0,0.5);
left: 0;
right: 0;
bottom: 0;
padding: 20px;
overflow:hidden;
color:#fff;
top:0;
display:none;
-webkit-transition: 2s;
transition: 2s;}
.gallery_product:hover .img-info{
display:block;
-webkit-transition: 2s;
transition: 2s;}
.img-info p{
color:#fff;
text-align: left;
font-size: 15px;}
</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654741-8"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-110654741-8');
</script>
</head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<body data-spy="scroll" data-target=".navbar">
<!-- header -->
<?php include '../include/header.php'; ?>
<!-- header -->
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
<section class="portfolio pt-5" id="portfolio">
    <div class="container">
          <div class="row">
                <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class="gallery-title mb-5">Our Portfolios</h1>
                </div>

            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div align="center">

                    <button class="filter-button" data-filter="all">All</button>

                    <button class="filter-button" data-filter="category1">Designing</button>

                    <button class="filter-button" data-filter="category2">Development</button>

                    <button class="filter-button" data-filter="category3">App</button>

                </div></div>



            <br/>



            <div class="gallery_product col-sm-3 col-12 filter all category1 ">

                <a class="fancybox" rel="ligthbox" href="../assets/images/jwellery.png">

                    <img class="img-responsive" alt="#primacy" src="../assets/images/jwellery-small.png" />

                    <div class='img-info'>

                        <h4>REYNA</h4>

                        <p>Jwellery Website Developed In Wordpress,Html5,Css3,Jquery</p>

                    </div>

                </a>

            </div>



            <div class="gallery_product col-sm-3 col-12 filter category3 ">

                <a class="fancybox" rel="ligthbox" href="../assets/images/muddiz.jpg">

                    <img class="img-responsive" alt="#primacy" src="../assets/images/muddiz-small.jpg" />

                    <div class='img-info'>

                        <h4>MUDDIZ</h4>

                        <p>Grocerry Website Developed In Codeigniter,Html5,Css3,Jquery </p>

                    </div>

                </a>

            </div>



            <div class="gallery_product col-sm-3 col-12 filter category2">

                <a class="fancybox" rel="ligthbox" href="../assets/images/netwood.png">

                    <img class="img-responsive" alt="#primacy" src="../assets/images/netwood-small.png" />

                    <div class='img-info'>

                        <h4>NETWOOD</h4>

                        <p>Video Portal Website Developed In Codeigniter,Html5,Css3,Jquery</p>

                    </div>

                </a>

            </div>



            <div class="gallery_product col-sm-3 col-12 filter category2">

                <a class="fancybox" rel="ligthbox" href="../assets/images/boi.png">

                    <img class="img-responsive" alt="#primacy" src="../assets/images/boi-small.jpg" />

                    <div class='img-info'>

                        <h4>BOI BIPANI</h4>

                        <p>BOI BIPANI  Ecommerce Website Developed In Wordpress,Html5,Css3,Jquery</p>

                    </div>

                </a>

            </div>





            <!--

                       <div class="gallery_product col-sm-3 col-xs-6 filter all category1 ">

                            <a class="fancybox" rel="ligthbox" href="assets/images/jwellery.png">

                                <img class="img-responsive" alt="#primacy" src="assets/images/jwellery-small.png" />

                                <div class='img-info'>

                                    <h4>REYNA</h4>

                                    <p>Jwellery Website Developed In Wordpress,Html5,Css3,Jquery</p>

                                </div>

                            </a>

                        </div>



                        <div class="gallery_product col-sm-3 col-xs-6 filter category3 ">

                            <a class="fancybox" rel="ligthbox" href="assets/images/muddiz.jpg">

                                <img class="img-responsive" alt="#primacy" src="assets/images/muddiz-small.jpg" />

                                <div class='img-info'>

                                    <h4>MUDDIZ</h4>

                                    <p>Grocerry Website Developed In Codeigniter,Html5,Css3,Jquery </p>

                                </div>

                            </a>

                        </div>



                        <div class="gallery_product col-sm-3 col-xs-6 filter category2">

                             <a class="fancybox" rel="ligthbox" href="assets/images/netwood.png">

                                <img class="img-responsive" alt="#primacy" src="assets/images/netwood-small.png" />

                                <div class='img-info'>

                                    <h4>NETWOOD</h4>

                                    <p>Video Portal Website Developed In Codeigniter,Html5,Css3,Jquery</p>

                                </div>

                            </a>

                        </div>



                        <div class="gallery_product col-sm-3 col-xs-6 filter category2">

                            <a class="fancybox" rel="ligthbox" href="assets/images/boi.png">

                                <img class="img-responsive" alt="#primacy" src="assets/images/boi-small.jpg" />

                                <div class='img-info'>

                                    <h4>BOI BIPANI</h4>

                                    <p>BOI BIPANI  Ecommerce Website Developed In Wordpress,Html5,Css3,Jquery</p>

                                </div>

                            </a>

                        </div>

            -->









        </div>

        <div class="clearfix"></div>



    </div>

</section>
<!-- footer -->
<?php include '../include/menu.php'; ?>
<?php include '../include/footer.php'; ?>
<!-- footer -->
<script src="../assets/js/jquery-2.2.3.min.js"></script>
<script src="../assets/js/jquery.easing.min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/swiper.min.js"></script>
<script src="../assets/js/jquery.events.touch.min.js"></script>
<script src="../assets/js/lightcase.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/TweenMax.min.js"></script>
<script src="../assets/js/jquery.wavify.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/jquery.parallax-scroll.js"></script>
<script src="../cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<!--	<script src="assets/js/particles.min.js"></script>-->
<script src="../assets/js/jquery.lazy.min.js"></script>
<script src="../assets/js/jquery.lazy.plugins.min.js"></script>
<script src="../assets/js/custom.js"></script>


<script>
    //				$(window).on('load', function() {
    //		   $('#loading').delay('2000').fadeOut('slow');
    //		});
    // plugin build-in placeholder management
    $(function() {
        $('.lazy').lazy({

            delay:1500,
            effect: "fadeIn",
            effectTime: 1000,
            threshold: 0

        });
    });


    $(document).ready(function() {

        $('.menu-icon').click(function() {


            $('.menu-icon').addClass('active');

        });

        $('.menu-icon2').click(function() {
            $('.menu-icon2').addClass('active');
            $('.footer-mega-menu').removeClass('active');
            $('.menu-icon').removeClass('active');

        });

        $('.menu-icon').click(function() {

            $('.footer-mega-menu').addClass('active');
        });
    });
</script>

<script>
    function open_menu() {
        //alert("hii");
        $('#slide_menu2').slideToggle('slow');
        //alert($('#ravi_1').val());
    }

    $(document).ready(function(){
        $('#global-dropdown').click(function(){
            //alert('dsadsa');
            $('#my-global').toggle('fast');

        });
    });
</script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-751223910');
</script>
<!-- Event snippet for Leads conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
    function gtag_report_conversion(url) {
        var callback = function () {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-751223910/q0bDCJv_75gBEOaIm-YC',
            'event_callback': callback
        });
        return false;
    }
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/565b419c81505c8622dd95ea/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();


</script>
<!--End of Tawk.to Script-->
<script>
    var scroll = new SmoothScroll('a[href*="#"]');
</script>
<script>
    window.onscroll = myFunction;
    // Filename: script.js
    function myFunction(){
        var  myWidth = window.innerWidth;
//		 if(myWidth >768){

//      var element = document.getElementById("my-tab");



        var desiredPosition = 500;

        if(window.pageYOffset >= desiredPosition){
            document.getElementById("my-tab").style.cssText+="position:fixed;top:20px;z-index:999";


        }
        else {
            document.getElementById("my-tab").style.cssText+="position:relative";
        }

//	  }

    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147240416-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-147240416-1');
</script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/565b419c81505c8622dd95ea/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
<script src="../cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script>

    /*	gallery */

    $(document).ready(function(){



        $(".filter-button").click(function(){

            var value = $(this).attr('data-filter');



            if(value == "all")

            {

                $('.filter').show('1000');

            }

            else

            {

                $(".filter").not('.'+value).hide('3000');

                $('.filter').filter('.'+value).show('3000');



            }



            if ($(".filter-button").removeClass("active")) {

                $(this).removeClass("active");

            }

            $(this).addClass("active");

        });

    });

    /*	end gallery */



    $(document).ready(function(){

        $(".fancybox").fancybox({

            openEffect: "none",

            closeEffect: "none"

        });

    });





</script>