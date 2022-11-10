
	<link rel="stylesheet" href="../assets/css/animate.css">

	<link rel="stylesheet" href="../assets/css/lightcase.css">

	<link rel="stylesheet" href="../assets/css/simple-line-icons.css">

	<link rel="stylesheet" href="../assets/css/ElegantIcons.css">

	<link rel="stylesheet" href="../assets/css/swiper.min.css">

	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

	

	<link rel="stylesheet" href="../assets/css/home-3-style.css"><!--food-->

    <link rel="stylesheet" href="../assets/css/home-4-style.css"><!--ecom-->

        <link rel="stylesheet" href="../assets/css/home-5-style.css"><!--ecom-->



    <link rel="stylesheet" href="../assets/css/style.css"><!--web design & development-->

    <link rel="stylesheet" href="../css/common-style.css">



   <!-- <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.1.0/css/all.css">-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

	<link rel="stylesheet" type="text/css" href="../assets/css/icofont/icofont.min.css">

    <link href="https://fonts.googleapis.com/css?family=Cabin|Montserrat&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/readmore.css">
	<link rel="stylesheet" href="../assets/css/responsive.css">

	<script src="../unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script>

		<style>

	

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


<!-- Mirrored from primacyinfotech.com/our-portfolios.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 10:54:24 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<body data-spy="scroll" data-target=".navbar">

<!--

        <div id="loading">

		  <img id="loading-image" src="assets/images/ajax-loader.gif" alt="Loading..." />

		</div>

-->



<!--callback requset popup-->

	<!-- Modal --> 

	<div id="callback" class="modal fade animated swing" role="dialog">

		<div class="modal-dialog">



			<!-- Modal content-->

			<div class="modal-content" style="background-color: #fff!important;">

				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal">&times;</button>

				</div>

				<div class="modal-body"> 

					<div class="request_form">

						<form action="#" method="post">

							<div class="form-group">

								<label for="name" style="margin-left:0px;"><b>Name</b>:</label>

								<input type="text" name="cname" class="form-control" id="c_number" required>

							</div>

							<div class="form-group">

								<label for="number" style="margin-left:0px;"><b>Mobile Number</b>:</label>

								<!--<input type="text" class="form-control" id="cmobile" name="cmobile" pattern="^[6-9][0-9]{9}$">-->



								<span id="message_4"></span>

								<input type="text" name="cmobile" id="phone_4" placeholder="Enter your Phone" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" required>

							</div>

							<button name="submit2" type="submit" class="btn btn-success" ><i class="fa fa-paper-plane"></i> Send Request</button>

						</form>

					</div>

				</div>



			</div>



		</div>

	</div>

	<!--callback requset popup-->

<!--start model end-->

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">

         <h3 id="myModalLabel"><b>We'd Love to Hear From You</b></h3><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

       

      </div>

      <div class="modal-body">

        <form class="form-horizontal col-sm-12" method="post">

          <div class="form-group"><label><b>Name</b></label>

          <input class="form-control required" placeholder="Your name" type="text" name="name" required></div>

          

          <div class="form-group"><label><b>E-Mail</b></label><input class="form-control email" placeholder="email@you.com (so that we can contact you)"  type="email" name="email" required></div>

          

          <div class="form-group"><label><b>Phone</b></label><input class="form-control phone" placeholder="999-999-9999" name="phone" type="tel" required></div>

          

          <div class="form-group col-md-12">

          <label>Select Services</label>

							<select name="services" class="form-control" required>

								<option value="">Select Services</option>

								<option value="Web Developemnt">Web Developemnt</option>

								<option value="Web Designing">Web Designing</option>

								<option value="MLM Softawre">MLM Softawre</option>

								<option value="Digital Marketing">Digital Marketing</option>

								<option value="Mobile APP Development">Mobile APP Development</option>

								<option value="Ecommerce Website">Ecommerce Website </option>

								<option value="Grocerry Shop">Grocerry Shop</option>

								<option value="LMS">Learning Mamagement System</option>

								<option value="CMS">Content Management System</option>

								<option value="Food Delivery App">Food Delivery App</option>

								<option value="Loan Management Software">Loan Management Software</option>

								<option value="OLA/Uber Clone">OLA/Uber Clone</option>

								<option value="Travel Portal Solution">Travel Portal Solution</option>

								<option value="Recharge Portal">Recharge Portal</option>

								<option value="Real Estate Portal">Real Estate Portal</option>

								<option value="Video Portal">Video Portal</option>

								<option value="Billing Software">Billing Software</option>

								<option value="Accounting Portal">Accounting Portal</option>

								

								

								

								

							</select>

						</div>

          <div class="form-group"><label><b>Message</b></label>

          <textarea class="form-control" name="message" placeholder="Your message here.." required></textarea></div>

          <div class="form-group">

          

<!--          <p class="help-block pull-left text-danger hide" id="form-error">&nbsp; The form is not valid. </p>-->

          </div>

            <div class="modal-footer">

       <button type="submit" name="submit1" class="btn btn-success pull-right">Send It!</button> 

           <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>

      </div>

        </form>

      </div>

    

    </div>

  </div>

</div>

<!--end model-->

<!--

	<header class="header">

		<nav class="navbar navbar-expand-lg fixed-top" id="main-nav">

			<div class="container">

				<a class="navbar-brand" href="#">

					<img class="white-logo" src="assets/images/logo-p.png" alt="logo">

					<img class="color-logo" src="assets/images/logo-p.png" alt="logo">

				</a>

				<button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#main-nav-collapse" aria-controls="main-nav-collapse" aria-expanded="false" aria-label="Toggle navigation">

					<span class="menu-toggle">

                        <span class="hamburger">

                            <span></span>

                            <span></span>

                            <span></span>

                        </span>

                        <span class="hamburger-cross">

                            <span></span>

                            <span></span>

                        </span>

                    </span>

				</button>

				<div class="collapse navbar-collapse order-3 order-lg-2" id="main-nav-collapse">

					<ul class="navbar-nav ml-auto">

						<li class="nav-item dropdown">

                            <a class="nav-link " href="#banner"  aria-haspopup="true" aria-expanded="false">

                                Home

                            </a>

                                                 </li>

						<li class="nav-item">

							<a class="nav-link nav-link-scroll" href="#feature">Features</a>

						</li>

						<li class="nav-item">

							<a class="nav-link nav-link-scroll" href="#screenshot">Screenshots</a>

						</li>

						<li class="nav-item">

							<a class="nav-link nav-link-scroll" href="#pricing">Pricing</a>

						</li>

					

						<li class="nav-item">

							<a class="nav-link nav-link-scroll" href="#download">Download</a>

						</li>

					</ul>

				</div>

				<div class="nav-search order-2 order-lg-3">

					<i class="fa fa-search"></i>

				</div>

			</div>

		</nav>

	</header>

	

-->





<!--My fixed header-->

		<div class="top-bar">
			<div class="c-mob2">
				<ul class="c-mob-3">
					<li><img src="../assets/images/inddd.png" alt="india"></li>
					<li><a href="tel:+91 9088015866" class="">+91 9088015866</a></li>
					<li><a href="tel:+91 9088015865" class="">/65</a></li>


					<li><img width="16" height="11" src="../assets/images/canada-flag-xs.png" alt="canada"></li> &nbsp;
					<li> <a href="tel:+16474908004" class="Blondie-email">+1 6474908004</a></li> 
 


					<li><img width="16" height="11" src="../assets/images/bangladesh-flag-xs.png" alt="bangladesh"></li> &nbsp;
					<li><a href="tel:+88 01759787636" class="Blondie-email">+88 01759787636</a></li>
				</ul>

			</div>
		</div>

<div class="top"> 
	<div class="container">
		<div class="row">
			<div class="col-md-3 pic0"><a href="../index.php"><img src="../assets/images/logo-p.png" alt="primacy logo"></a></div>
			<div class="col-md-7">
<!--				<div class="col-md-12">-->
					<div class="c-mob">
						<div class="col-md-4">
							<img src="../assets/images/inddd.png" alt="india">&nbsp;
							<a href="tel:+91 9088015866" class="">+91 9088015866</a>
							<a href="tel:+91 9088015865" class="">/65</a>
						</div>
						<div class="col-md-4">
							<img width="16" height="11" src="../assets/images/canada-flag-xs.png" alt="canada"> &nbsp;
							<a href="tel:+16474908004" class="Blondie-email">+1 6474908004</a>
   
						</div>
						<div class="col-md-4">
							<img width="16" height="11" src="../assets/images/bangladesh-flag-xs.png" alt="bangladesh"> &nbsp;
							<a href="tel:+88 01759787636" class="Blondie-email">+88 01759787636</a>

						</div>
					</div>
<!--				</div>-->
			</div>
			<div class="col-md-2 dropdown ">
				<button class="my-button my-button2 dropdown-toggle pull-right" type="button" data-toggle="dropdown"><i class="fas fa-globe"></i>&nbsp;Global

					<span class="caret"></span></button>
				<ul class="dropdown-menu pull-right">
					<li><a href="https://www.primacyinfotech.in/"><span><img src="../assets/images/inddd.png" alt="india"> &nbsp;India</span></a></li>
					<li><a href="https://ca.primacyinfotech.com/"><span><img width="16" height="11" src="../assets/images/canada-flag-xs.png" alt="india"> &nbsp;Canada</span></a></li>
					<li><a href="http://bd.primacyinfotech.com/"><span><img width="16" height="11" src="../assets/images/bangladesh-flag-xs.png" alt="india"> &nbsp;Bangladesh</span></a></li>
				</ul>
			</div>

		</div>
	</div>
</div>



<!--end fixed header-->
	<!-- header -->

	


<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>

<style>

section{

    padding: 50px 0;

}



/*	gallery */



.gallery-title{

    font-size: 36px;

    color: #3F6184;

    text-align: center;

    font-weight: 500;

    margin-bottom: 70px;

}

.filter-button{

    font-size: 18px;

    border: 2px solid #3F6184;

	padding:5px 10px;

    text-align: center;

    color: #3F6184;

    margin-bottom: 30px;

	background:transparent;

}

.filter-button:hover,

.filter-button:focus,

.filter-button.active{

    color: #ffffff;

    background-color:#3F6184;

	outline:none;

}

.gallery_product{

    margin: 0px;

	padding:0;

	position:relative;

}

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

    transition: 2s;

}



.gallery_product:hover .img-info{

	display:block;

   -webkit-transition: 2s;

    transition: 2s;

}

	.img-info p{

		color:#fff;

		text-align: left;

		font-size: 15px;

	}



/*	end gallery */</style>

 <section class="portfolio" id="portfolio">

	<div class="container">

		<div class="row">



			<div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">

				<h1 class="gallery-title">Our Portfolios</h1>

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
	




	
  <!--side menuu on desktop-->
	  <div id="menuwrapper">
        <ul id="sidemenu">
            <li><a class="" href="../index.php"><i class="fas fa-home"><br>Home</i></a></li>

            <li><a href="#"><i class="fas fa-server"><br>
                        Service</i></a>
                <ul class="my-col-2">
<!--
                    <li><a href="web-developemnt.php"><img src="assets/images/small/software.png"><br />
                        <div class="txt">Software Development</div>
                        </a>
                    </li>
-->
                    <li>
                       <a href="../service/web-developement.php"><i class="icofont-code icofont-2x"></i><br />
                        <div class="txt">Web Development</div>
						</a>
                    </li>
                        <li><a href="../service/web-designing.php"><i class="icofont-dashboard-web icofont-2x"></i>
                            
                            <div class="txt">Web Designing</div>
                        </a>
                    </li>
                      <li><a href="../service/mobile-app-developemnt.php"><i class="icofont-brand-android-robot icofont-2x"></i><br />
                        <div class="txt">Apps Development</div>
						  </a>
                    </li>
               
                    <li><a href="../service/crm-erp-portal-development%20.php"><i class="icofont-computer icofont-2x"></i><br />
                        <div class="txt">CRM & ERP</div> 
						</a>
                    </li>
                  
                    
                     <li><a href="../service/digital-marketing.php"><i class="icofont-automation icofont-2x"></i><br />
                        <div class="txt">Digital Marketing</div>
						 </a>
                    </li>
                  
                    <li><a href="../service/ui-ux%20Desing.php"><i class="icofont-penalty-card icofont-2x"></i><br />
                        <div class="txt">UI/UX Design</div>
						</a>
                    </li>
              
                 
                    <li><a href="ecommerce-development.html"><i class="icofont-shopping-cart icofont-2x"></i><br />
                        <div class="txt">Ecommerce Development</div>
						</a>
                    </li>
                 
           
                    
                
                     




                </ul>

            </li>
<!--
            <a href="#"><i class="fas fa-server fas-2x"><br>
                        Solution</i></a>
-->
            <li><a href="#"><i class="fas fa-server"><br>
                        Solution</i></a>
                <ul class="my-col-2">
                    <li><a target="_blank" href="http://www.travelbusinessportal.com/"><i class="icofont-airplane-alt icofont-2x"></i><br />
                        <div class="txt">Travel Portal</div>
                        </a>
                    </li>
                    <li>
                       <a href="../product/school-managmest-system.php"><i class="icofont-building-alt icofont-2x"></i><br />
						   <div class="txt">School Management</div></a>
                    </li>
                       <li><a href="../product/portal-accounting.php"><i class="icofont-paper icofont-2x"></i><br />
						<div class="txt">Accounting</div></a>
                    </li>

                </ul>

            </li>
              <li><a href="#"><i class="fas fa-server"><br>
                        Product</i></a>
                <ul class="my-col-2">
                          <li><a href="../product/readymade-food-delivery-app.php"><i class="icofont-fast-food icofont-2x"></i><br />
                        <div class="txt">Food Delhivery App</div> 
						</a>
                    </li>
                      <li><a href="../product/readymade-grocery-delivery-app.php"><i class="icofont-grocery icofont-2x"></i><br />
                        <div class="txt">Grocery Shop</div> 
						</a>
                    </li>
                       <li><a href="../product/recharge-bill-payment-portal-b2b-b2c.php"><i class="icofont-brand-china-mobile icofont-2x"></i><br />
                        <div class="txt">Recharge Portal</div> 
						</a>
                    </li>

                      <li>
                       <a href="../product/readymade-online-education-app.php"><i class="icofont-learn icofont-2x"></i><br />
						   <div class="txt">Learning Management</div></a>
                    </li>
                      <li><a href="../product/loan-mangment-system.php"><i class="icofont-money-bag icofont-2x"></i><br />
						  <div class="txt">Loan Management</div></a> 
                    </li>
                    <li><a href="portal-health.html"><i class="icofont-doctor icofont-2x"></i><br />
						<div class="txt">Healthcare Management</div></a>
                    </li>
                    <li><a href="../service/mlm-software-development%20.php"><i class="icofont-company icofont-2x"></i><br />
						<div class="txt">MLM Software</div></a>
                    </li>
                 
                     <li><a href="../product/readymade-video-streaming-app.php"><i class="icofont-video-cam icofont-2x"></i>
                            
                            <div class="txt">Video Portal</div>
                        </a>
                    </li>
                    <li><a href="../product/readymade-realestate-portal.php"><i class="icofont-search-property icofont-2x"></i>
                            
                            <div class="txt">Realestate</div>
                        </a>
                    </li>
                     <li><a href="../product/readymade-cab-booking%20app.php"><i class="icofont-car-alt-1 icofont-2x"></i>
                            
                            <div class="txt">OLA/Uber Clone</div>
                        </a>
                    </li>
                    
                     
                    
                
                     




                </ul>

            </li>
            
                <li><a href="#"><i class="fas fa-industry"><br>
                        Industry</i></a>
                <ul class="my-col-2">
                    <li><a href="../industry/industry-healthcare.php"><i class="icofont-doctor icofont-2x"></i><br />
                        <div class="txt">Healthcare</div>
                        </a>
                    </li>
                    <li>
                       <a target="_blank" href="http://www.travelbusinessportal.com/"><i class="icofont-airplane-alt icofont-2x"></i><br />
                        <div class="txt">Travel</div>
						</a>
                    </li>
                      <li><a href="../industry/industry-education.php"><i class="icofont-paper icofont-2x"></i><br />
                        <div class="txt">Financial</div>
						  </a>
                    </li>
                    <li><a href="../industry/industry-retail.php"><i class="icofont-ui-cart icofont-2x"></i><br />
                        <div class="txt">Retail</div>
						</a>
                    </li>
                    <li><a href="../industry/industry-insurance.php"><i class="icofont-holding-hands icofont-2x"></i><br />
                        <div class="txt">Insurance</div>
						</a>
                    </li>
                     <li><a href="../industry/industry-bankin-finance.php"><i class="icofont-bank icofont-2x"></i>
                            
                            <div class="txt">Banking</div>
                        </a>
                    </li>
                      <li><a href="../industry/industry-goverment.php"><i class="icofont-man-in-glasses icofont-2x"></i>
                            
                            <div class="txt">Goverment</div>
                        </a>
                    </li>
                      <li><a href="../industry/industry-media.php"><i class="icofont-newspaper icofont-2x"></i>
                            
                            <div class="txt">Media </div>
                        </a>
                    </li>
                    
                    
                     
                    
                
                     




                </ul>

            </li>
            
            
            
            <li><a href="#"><i class="fas fa-paper-plane"><br>
                        About us</i></a>
                        
                <ul class="my-col-2">
                    <li><a href="#"><i class="icofont-question-square icofont-2x"></i><br />
                        <div class="txt">Why Us</div>
                        </a>
                    </li>
                    <li>
                       <a href="our-company.php"><i class="icofont-building icofont-2x"></i><br />
                        <div class="txt">Company</div>
						</a>
                    </li>
                      <li><a href="career.php"><i class="icofont-search-job icofont-2x"></i><br />
                        <div class="txt">Career</div>
						  </a>
                    </li>
                    <li><a href="#"><i class="icofont-building-alt icofont-2x"></i><br />
                        <div class="txt">Infrastructure</div>
						</a>
                    </li>
                    <li><a href="#"><i class="icofont-team icofont-2x"></i><br />
                        <div class="txt">Team</div>
						</a>
                    </li>
                     <li><a href="#"><i class="icofont-notebook icofont-2x"></i><br />
                        <div class="txt">Our Case Study</div>
						</a>
                    </li>
                     
             </ul>



            </li>
    
            <li><a class="noflyout selected" href="contact.php"><i class="fas fa-envelope"><br>Contact US</i></a></li>

        </ul>
        
    </div>
<!--end side menuu on desktop-->

   	


<div class="nav-side-menu" id="slide_menu2" style="display:none;">



    <div class="brand">Menu</div>
    <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
  
        <div class="menu-list">
  
            <ul id="menu-content" class="menu-content collapse out">
                <li>
                  <a href="../index-2.html">
                  <i class="fa fa-dashboard fa-lg"></i> Home
                  </a>
                </li>

                <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                  <a href="#"><i class="fa fa-gift fa-lg"></i> Services<span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="products">
                    <li class="active"><a href="../service/web-developement.php">Web Development</a></li>
                           <li><a href="../service/web-designing.php">Web Designing</a>
                    </li>
                    <li>
                        <a href="../service/mobile-app-developemnt.php">Apps Development</a>
                    </li>
                      <li><a href="../service/crm-erp-portal-development%20.php">CRM & ERP</a>
                    </li>
                  
                       <li><a href="../service/digital-marketing.php">Digital Marketing</a>
                    </li>
                       <li><a href="../service/ui-ux%20Desing.php">UI/UX Design</a>
                    </li>
					<li><a href="ecommerce-development.html">Ecommerce Development</a></li>
               
                       
               
                  
                  
                    
                     
                </ul>


                <li data-toggle="collapse" data-target="#service2" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Solution <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service2">
                        <li class="active"><a href="http://www.travelbusinessportal.com/">Travel Portal</a></li>
                           <li><a href="../product/school-managmest-system.php">School Management</a>
                    </li>
                    <li><a href="../product/portal-accounting.php">Accounting</a>
                    </li>
                        
                      
                </ul>
                 <li data-toggle="collapse" data-target="#service" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Product <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="service">
                          
                        <li><a href="../product/readymade-food-delivery-app.php">Food Delhivery App</a>
                    </li>
                           <li><a href="../product/readymade-grocery-delivery-app.php">Grocery Shop</a>
                    </li>
                        <li><a href="../product/recharge-bill-payment-portal-b2b-b2c.php">Recharge Portal</a>
                    </li>
                        
                     <li><a href="../product/readymade-online-education-app.php">Learning Management</a>
                    </li>
                        <li><a href="../product/loan-mangment-system.php">Loan Management</a>
                    </li>
                   
                   
                       <li><a href="portal-health.html">Healthcare Management</a>
                    </li>
                       <li><a href="../service/mlm-software-development%20.php">MLM Software</a>
                    </li>
                    
                        <li><a href="../product/readymade-video-streaming-app.php">Video Portal</a>
                    </li>
                       <li><a href="../product/readymade-realestate-portal.php">Realestate</a>
                    </li>
                       <li><a href="../product/portal-ola-2.php">OLA/Uber Clone</a>
                    </li>
                        
                      
                </ul>
                
                <li data-toggle="collapse" data-target="#about" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Industry<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="about">
                   
                           <li><a href="../industry/industry-healthcare.php">Healthcare</a>
                    </li>
                      <li><a href="../industry/industry-travel.php">Travel</a>
                    </li>
                      <li><a href="../industry/industry-education.php">Financial</a>
                    </li>
                       <li><a href="../industry/industry-retail.php">Retail</a>
                    </li>
                    <li><a href="../industry/industry-insurance.php">Insurance</a>
                    </li>
                    <li><a href="../industry/industry-bankin-finance.php">Banking</a>
                    </li>
                      <li><a href="../industry/industry-goverment.php">Goverment</a>
                    </li>
                    <li><a href="../industry/industry-media.php">Media</a>
                    </li>
                     
                      
                </ul>
                
                
<!--
                <li data-toggle="collapse" data-target="#about" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> Industry<span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="about">
                   
                           <li><a href="why-us.php">Why Us</a>
                    </li>
                      <li><a href="our-company.php">Company</a>
                    </li>
                      <li><a href="career.php">Career</a>
                    </li>
                       <li><a href="#">Infrastructure</a>
                    </li>
                    <li><a href="#">Team</a>
                    </li>
                    <li><a href="industry-media.php">Media</a>
                    </li>
                     
                      
                </ul>
-->
                <li data-toggle="collapse" data-target="#about3" class="collapsed">
                  <a href="#"><i class="fa fa-globe fa-lg"></i> About Us <span class="arrow"></span></a>
                </li>  
                <ul class="sub-menu collapse" id="about3">
                   
<!--                           <li><a href="why-us.php">Why Us</a>-->
                   <li><a href="#">Why Us</a>
                    </li>
                      <li><a href="our-company.php">Company</a>
                    </li>
                      <li><a href="career.php">Career</a>
                    </li>
                       <li><a href="#">Infrastructure</a>
                    </li>
                    <li><a href="#">Team</a>
                    </li>
                    <li>
<!--                    <a href="sucess-story.php">Our Case Study</a>-->
                   <a href="#">Our Case Study</a>
                    </li>
                     
                      
                </ul>
               <!--   <li>
                  <a href="about.php">
                  <i class="fa fa-user fa-lg"></i> About Us
                  </a>
                  </li>-->
<!-- vb
                 <li>
                  <a href="our-company.php">
                  <i class="fa fa-user fa-lg"></i> Company
                  </a>
                  </li>
-->

                 <li>
                  <a href="contact.php">
                  <i class="fa fa-users fa-lg"></i> Contact us
                  </a>
                </li>
            </ul>
     </div>
     	<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com/primacyit/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=919088015865"><i class="fab fa-whatsapp"></i></a></li>

						<li class="list-inline-item"><a href="https://in.linkedin.com/company/primacy-infotech-pvt-ltd"><i class="fab fa-linkedin-in"></i></a></li>
						<!--<li class="list-inline-item"><a href=""><i class="fab fa-skype"></i></a></li>
-->
						<li class="list-inline-item"><a href="mailto:info@primacyinfotech.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
</div>
    	
		
		
		
		<div class="menu-footer">

		<ul class="menu2">
			<li><a class="" href="../index-2.html"><i class="fas fa-home">&nbsp;Home</i></a></li>
			<li><a href="about.php"><i class="fas fa-paper-plane">&nbsp;
						About us</i></a></li>

			<li><a class="noflyout selected" href="our-company.php"><i class="fas fa-building">&nbsp;Company</i></a></li>
			<li><a class="noflyout selected" href="contact.php"><i class="fas fa-envelope">&nbsp;Contact US</i></a></li>
			<li class="menu-icon"><img src="../assets/images/icon_footer-toggle.png"></li>



		</ul>
	</div>

	<div class="footer-mega-menu">
		<section id="footer">
			<div class="container-fluid">
               <div class="row">
				<div class="col-12 col-sm-3 col-md-2">
					<h5>Our Services</h5>
					<hr class="line">
					<ul class="list-unstyled quick-links">
						<li><a href="../service/web-developement.php"><i class="fa fa-angle-double-right"></i>Web Development</a></li>

						<li><a href="../service/web-designing.php"><i class="fa fa-angle-double-right"></i>Web Designing</a></li>
						<li><a href="../service/mobile-app-developemnt.php"><i class="fa fa-angle-double-right"></i>Mobile Apps Development</a></li>
						<li><a href="../service/crm-erp-portal-development%20.php"><i class="fa fa-angle-double-right"></i>CRM & ERP</a></li>
						<li><a href="../service/digital-marketing.php"><i class="fa fa-angle-double-right"></i>Digital Marketing</a></li>
			      <li><a href="../service/ui-ux%20Desing.php"><i class="fa fa-angle-double-right"></i>UI/UX Design</a>
                    </li>
                 
                
				
					</ul>
				</div>
				<div class="col-12 col-sm-3 col-md-2">
					<h5>Our Portal</h5>
					<hr class="line">
					<ul class="list-unstyled quick-links">
							<li><a target="_blank" href="http://www.travelbusinessportal.com/"><i class="fa fa-angle-double-right"></i>Travel Portal
									</a>
								</li>
								<li>
								   <a href="../product/school-managmest-system.php"><i class="fa fa-angle-double-right"></i>School Management</a>
								</li>
								  <li><a href="../product/loan-mangment-system.php"><i class="fa fa-angle-double-right"></i>Loan Management</a>
								</li>
								<li><a href="portal-health.html"><i class="fa fa-angle-double-right"></i>Healthcare Management</a>
								</li>
								<li><a href="../service/mlm-software-development%20.php"><i class="fa fa-angle-double-right"></i>MLM</a>
								</li>
						<li><a href="../product/readymade-realestate-portal.php"><i class="fa fa-angle-double-right"></i>Real Estate</a>
						<li><a href="../product/portal-accounting.php"><i class="fa fa-angle-double-right"></i>Accounting</a>
							
								</li>
					</ul>
				</div>
				<div class="col-12 col-sm-3 col-md-2">
					<h5>Quick links</h5>
					<hr class="line">
					<ul class="list-unstyled quick-links">
						<li><a href="../index-2.html"><i class="fa fa-angle-double-right"></i>Home</a></li>
						<li><a href="about.php"><i class="fa fa-angle-double-right"></i>About</a></li>
						<li><a href="our-company.php"><i class="fa fa-angle-double-right"></i>Company</a></li>
						<li><a href="privacy-policy.php"><i class="fa fa-angle-double-right"></i>Privacy Policy</a></li>
						<li><a href="terms-of-service.php"><i class="fa fa-angle-double-right"></i>Terms & Condition</a></li>
					</ul>
				</div>
				<div class="col-12 col-sm-3 col-md-5">
					<h5>Address</h5>
					<hr class="line">
					<ul class="list-unstyled quick-links">

						<li><a href="https://wwww.primacyinfotech.in/"><span><img src="../images/inddd.png" alt="india"> &nbsp;BF 79,BF Block ,Sector I,Salt Lake, Kolkata-64,WB,India</span></a></li>
						<li><i class="fas fa-mobile-alt"></i>&nbsp;
							<a href="tel:+9088015866">9088015866</a>
							<a href="tel:+9088015865">/65</a>
						</li>

						<li><a href="https://wwww.primacyinfotech.in/"><span><img width="20" height="15" src="../images/canada-flag-xs.png" alt="india"> &nbsp;Primacy Infotech Inc.
									4656 Full Moon Circle
									Mississauga ON</span></a></li>
						<li><i class="fas fa-mobile-alt"></i>&nbsp;
							 <a href="tel:+1 4169999429" class="Blondie-email">+1 6474908004</a>
						
						</li>
						<li><a href="https://wwww.primacyinfotech.in/"><span><img width="20" height="15" src="../images/bangladesh-flag-xs.png" alt="india"> &nbsp;31, KR PLAZA,Purana Paltan, Dhaka-1000
								</span></a></li>
						<li><i class="fas fa-mobile-alt"></i>&nbsp;
							<a href="tel:+8801759787636">+88 01759787636</a> 
<!--							<a href="tel:+9088015865">/65</a>-->
						</li>
					</ul>
				</div>
				<div class="col-1 col-sm-1 col-md-1">
					<div class="menu-icon2">
						<img src="../assets/images/icon_footer-toggle.png">


					</div>  
				</div>
			    </div>
			</div>
			<br /><br />
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.facebook.com/primacyit/"><i class="fab fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=919088015865"><i class="fab fa-whatsapp"></i></a></li>
						<li class="list-inline-item"><a href="https://in.linkedin.com/company/primacy-infotech-pvt-ltd"><i class="fab fa-linkedin-in"></i></a></li>
<!--						<li class="list-inline-item"><a href=""><i class="fab fa-skype"></i></a></li>-->
						<li class="list-inline-item"><a href="mailto:info@primacyinfotech.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>
			<br />
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">

					<p class="copyright">&copy 2019 All right Reversed.<a class="text-green ml-2" href="../index.php" target="_blank">Primacy Infotech Inc.</a></p>
				</div>
				<hr>

			</div>
		</section>
	</div>
    
<!--mobile footer-->
<div class="footer-navbar animated fadeInUp">
	<a href="#" onclick="open_menu()"> <i class="fas fa-ellipsis-h"></i></a>
	<a href="https://api.whatsapp.com/send?phone=919088015865&amp;text=Hi%20Team%20PrimacyInfotech.com!%20I%20was%20just%20viewing%20your%20website%20and%20am%20interested%20in%20knowing%20more%20about%20your%20Services" class="active"><i class="fab fa-whatsapp"></i></a>
<!--	<a href="https://www.facebook.com/primacyit/" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>-->
	<!--<a href="skype:kabir52247?call" class="skype"><i class="fab fa-skype"></i></a>-->
	<a href="tel:+919088015866" class="skype"><i class="fa fa-phone"></i></a>
	<a href="mailto:info@primacyinfotech.com" class="phone"><i class="fa fa-envelope"></i></a>
	
<!--	<a id="global-dropdown" href="#" class="phone">Global</a>-->

<!--
		<ul id="my-global" style="display:none;">
		     <li><a href="https://wwww.primacyinfotech.in"><span><img src="images/inddd.png" alt="india"> &nbsp;India</span></a></li>
			 <li><a href="https://wwww.primacyinfotech.in"><span><img width="16" height="11" src="images/canada-flag-xs.png" alt="india"> &nbsp;Canada</span></a></li>
			<li><a href="https://wwww.primacyinfotech.in"><span><img width="16" height="11" src="images/bangladesh-flag-xs.png" alt="india"> &nbsp;Bangladesh</span></a>
			</li>
		</ul>
-->

	
<!--
			<div class="dropup">
    <button class="btn btn-default btn-danger btn-sm dropdown-toggle my-toogle" type="button" data-toggle="dropdown">Global
    <span class="caret"></span></button>
    <ul class="dropdown-menu mena">
      <li><a href="https://wwww.primacyinfotech.in"><span><img src="images/inddd.png" alt="india"> &nbsp;India</span></a></li>
					  <li><a href="https://wwww.primacyinfotech.in"><span><img width="16" height="11" src="images/canada-flag-xs.png" alt="india"> &nbsp;Canada</span></a></li>
					  <li><a href="https://wwww.primacyinfotech.in"><span><img width="16" height="11" src="images/bangladesh-flag-xs.png" alt="india"> &nbsp;Bangladesh</span></a></li>
    </ul>
  </div>
-->


</div>

<!--mobile footer-->    
    
    
    <!---//Contact Request-->
	<!---//Call Back Request-->
	
<!---//Adword Lead Details-->

		
    
    
    
    <!---//Contact Request-->
	<!---//Call Back Request-->
	
<!---//Adword Lead Details-->

	








<!--end-->


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



<!-- Mirrored from primacyinfotech.com/our-portfolios.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Jan 2020 10:54:24 GMT -->
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