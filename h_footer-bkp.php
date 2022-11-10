
<footer>
    <div class="menu-footer"></div> 
</footer>

<script>
    $(document).ready(function() {
        $('ul > li > ul').css('height', $(window).height() + 'px');
        $('#sidemenu').css('height', $(window).height() + 'px');
    });
</script>

<link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
<link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">


<link rel="icon" href="pilogofab.png" type="image/gif" sizes="HeightxWidth|any">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>



<!-- animation -->
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css'>
<!-- icon---->
<link  rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
<link rel="stylesheet" type="text/css" href="assets/css/icofont/icofont.min.css">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="owlcarousel/owl.carousel.min.js"></script>
<script src="https://unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>
<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>-->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>
<script src="js/index.js"></script>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
        $(window).scrollTo(0,1);
    }
</script>-->

<script src="js/my-js.js"></script>
<script src="assets/js/customize.js"></script>

<script>
    function open_menu() {
        //alert("hii");
        $('#slide_menu2').slideToggle('slow');
        //alert($('#ravi_1').val());
    }
</script>

<!-- particles-js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
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
<script>
    function openNav() {
        document.getElementById("myCanvs").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myCanvs").style.width = "0%";
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-147240416-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-147240416-1');
</script>-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654741-8"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110654741-8');
</script>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>



<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1470283249845936');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1470283249845936&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->



<!-- Go to www.addthis.com/dashboard to customize your tools -->
<!--<script type="text/javascript" src="https://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d75ee21150e9a13"></script>-->