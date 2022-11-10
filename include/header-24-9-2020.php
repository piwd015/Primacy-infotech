
<link rel="icon" href="../pilogofab.png" type="image/gif" sizes="HeightxWidth|any">

<link rel="stylesheet" href="../assets/css/swiper.min.css">



<link rel="stylesheet" href="../assets/css/bootstrap.min.css">


<link rel="stylesheet" href="../assets/css/home-3-style.css"><!--food-->

<link rel="stylesheet" href="../assets/css/home-4-style.css"><!--ecom-->

<link rel="stylesheet" href="../assets/css/home-5-style.css"><!--ecom-->


<link rel="stylesheet" href="../assets/css/responsive.css">


     
<style>

    img.g-img {
        width: 535px;
        height: 404px;
    }
    section#faq {
        margin-top: -101px;
    }

</style>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110654741-8"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110654741-8');
</script>-->

<!-- Global site tag (gtag.js) - Google Ads: 667492679 -->
<!--<script async src="https://www.googletagmanager.com/gtag/js?id=AW-667492679"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-667492679');
</script>-->

<!-- Event snippet for Submit lead form conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
    function gtag_report_conversion(url) {
        var callback = function () {
            if (typeof(url) != 'undefined') {
                window.location = url;
            }
        };
        gtag('event', 'conversion', {
            'send_to': 'AW-667492679/HMX0CMi1p88BEMfCpL4C',
            'event_callback': callback
        });
        return false;
    }
</script>


</head>

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

                            <input type="text" name="name" class="form-control" id="number" required>

                        </div>

                        <div class="form-group">

                            <label for="number" style="margin-left:0px;"><b>Mobile Number</b>:</label>

                            <!--<input type="text" class="form-control" id="cmobile" name="cmobile" pattern="^[6-9][0-9]{9}$">-->



                            <span id="message_4"></span>

                            <input type="text" name="mobile" id="mobile" placeholder="Enter your Phone" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g,'');" maxlength="10" required>

                        </div>

                        <button name="submitcb" type="submit" class="btn btn-success" ><i class="fa fa-paper-plane"></i> Send Request</button>

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

                            <option value="" disabled="disabled">Select Services</option> 

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

                        <button type="submit" name="submit11" class="btn btn-success pull-right">Send It!</button>

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
            <div class="col-md-3 pic0"><a href="../"><img src="../assets/images/logo-p.png" alt="primacy logo"></a></div>
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



<?php
session_start();
include("../mail/src/Mailjet/php-mailjet-v3-simple.class.php");

$apiKey = 'f6013a7295c2b8cf05912fe6c0734850';
$secretKey = '0fc23d25c6361571ce4047efd75ffb4e';

$mj = new Mailjet($apiKey, $secretKey);


if (isset($_POST['submitcb'])) {
    $name = $_POST["name"];
    $mobile = $_POST["mobile"];

    $servername = "localhost";
    $username = "primacy_1";
    $password = "Piwd@2020";
    $dbname = "primacy_1";
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO call_back_request (name, mobile) VALUES ('" . $name . "', '" . $mobile . "')";

    if ($con->query($sql) === TRUE) {
//echo "New record created successfully";

        $message = "
<html>
<head>
    <title>Call Back Request</title>
</head>
<body>
<p>Call Back Request details</p>
<table>
    <tr>
        <td>Name : </td>
        <td>" . $name . "</td>
    </tr>

    <tr>
        <td>Phone : </td>
        <td>" . $mobile . "</td>
        <td>Url : </td>
    		            <td>".$_SERVER['HTTP_REFERER']."</td>
    		        </tr>										<tr>
    		            <td>IP : </td>
    		            <td>".$_SERVER['REMOTE_ADDR']."</td>
    		        </tr>	
    </tr>

</table>
</body>
</html>";

// Create a new Object
        $mj = new Mailjet();
        $params = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "kabir@primacyinfotech.com",
            "subject" => "Call Back Request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result = $mj->sendEmail($params);
        $params1 = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "sudipta@primacyinfotech.com",
            "subject" => "Call Back Request from Primacy Infotech",
            "html" => "{$message}"
        );

        $result2 = $mj->sendEmail($params2);
        ?>
        <script>swal("Success!", "Thank you for your call back requset. Out team will Contact you shortly.", "success");</script>
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
if (isset($_POST['submit11'])|| isset($_POST['quotes12']) || isset($_POST['submit3'])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $services = $_POST["services"];
    $subject=$_POST["subject"];
    $message1 = $_POST["message"];

    $servername = "localhost";
    $username = "primacy_1";
    $password = "Piwd@2020";
    $dbname = "primacy_1";
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $sql = "INSERT INTO quotes (name, email, phone, services, message) VALUES ('" . $name . "', '" . $email . "', '" . $phone . "', '" . $services . "', '" . $message . "')";

    if ($con->query($sql) === TRUE) {
        $message = "
		<html>
    		<head>
    		    <title>New inquiry from :Product , Services</title>
    		</head>
    		<body>
    		    <p>New inquiry from details</p>
    		    <table>
    		        <tr>
    		            <td>Name : </td>
    		            <td>" . $name . "</td>
    		        </tr>
    		        <tr>
    		            <td>Email : </td>
    		            <td>" . $email . "</td>
    		        </tr>
    		        <tr>
    		            <td>Phone : </td>
    		            <td>" . $phone . "</td>
    		        </tr>
    		        <tr>
    		            <td>Service : </td>
    		            <td>" . $services . "</td>
    		        </tr>
    		        <tr>
    		            <td>Subject : </td>
    		            <td>".$subject."</td>
    		        </tr>
    		        <tr>
    		            <td>Message : </td>
    		            <td>" . $message1 . "</td>
    		             </tr>	 
    		             <tr>	
    		            <td>Url : </td>
    		            <td>".$_SERVER['HTTP_REFERER']."</td>
    		        </tr>	
    		        									<tr>
    		            <td>IP : </td>
    		            <td>".$_SERVER['REMOTE_ADDR']."</td>
    		        </tr>	
    		        </tr>
    		    </table>
    		</body>
		</html>";

        // Create a new Object
        $mj = new Mailjet();
        $params = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "kabir@primacyinfotech.com",
            "subject" => "New inquiry from : primacy web",
            "html" => "{$message}"
        );
        $result = $mj->sendEmail($params);


            $params2 = array(
            "method" => "POST",
            "from" =>"leads@primacyinfotech.com",
            "to" => "sudipta@primacyinfotech.com",
            "subject" => "New inquiry from : primacy web",
            "html" => "{$message}"
        );

$result1 = $mj->sendEmail($params2);
?>
<script>swal("Success!", "Thank you for your  requset. Out team will Contact you shortly.", "success");</script>
<?php
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }}

include_once "../piss/config.php";
include_once "../piss/project-security.php";
?>