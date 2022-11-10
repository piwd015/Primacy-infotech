<link rel="icon" href="../pilogofab.png" type="image/gif" sizes="HeightxWidth|any">
<link rel="stylesheet" href="../assets/css/main.css">
<link rel="stylesheet" type="text/css" href="../assets/css/icofont/icofont.min.css">
<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
<!-- <link rel="stylesheet" href="../use.fontawesome.com/releases/v5.1.0/css/all.css">-->
<link href="https://fonts.googleapis.com/css?family=Cabin|Montserrat&amp;display=swap" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/home-3-style.css"><!--food-->
<link rel="stylesheet" href="../assets/css/home-4-style.css"><!--ecom-->
<link rel="stylesheet" href="../assets/css/home-5-style.css"><!--ecom-->
<link rel="stylesheet" href="../assets/css/common.css">
<link rel="stylesheet" href="../assets/css/timeline.css">
<link rel="stylesheet" href="../assets/css/responsive.css">
<link rel="stylesheet" href="../assets/css/pistore.css"><!--pistore-->
<link rel="stylesheet" href="../assets/css/style.css"><!--web design & development-->
<link rel="stylesheet" href="../css/common-style.css">
<link rel="stylesheet" href="../css/readmore.css">
<link rel="stylesheet" href="../css/food_style.css">
<style>
    img.g-img {

        width: 535px;

        height: 404px;

    }

    section#faq {

        margin-top: -101px;

    }

.grecaptcha-badge {

    bottom: 60px !important;

}

</style>


<!-- Global site tag (gtag.js) - Google Ads: 10874354720 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10874354720"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-10874354720');
</script>
<script src="https://www.google.com/recaptcha/api.js?render=6LcFWz4aAAAAABu4z5ZLRS7wGLYwHo-GG3sRJk_l"></script>
</head>
<body data-spy="scroll" data-target=".navbar">
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

                      	<input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">

                        <button name="submitcb" type="submit" class="btn btn-success" ><i class="fa fa-paper-plane"></i> Send Request</button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

<!--callback requset popup-->

<!--start model end-->

<div id="myModal" class="modal fade modal_sec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h3 id="myModalLabel"><b>Submit Detail & Get discount</b></h3><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

            </div>

            <div class="modal-body">

                <form class="form-horizontal col-sm-12" method="post">

                    <div class="form-group"><label><b>Name</b></label>

                        <input class="form-control required" placeholder="Your name" type="text" name="name" required></div>

                    <div class="form-group"><label><b>E-Mail</b></label><input class="form-control email" placeholder="email@you.com (so that we can contact you)"  type="email" name="email" required></div>

                    <div class="form-group"><label><b>Phone</b></label><input class="form-control phone" placeholder="999-999-9999" name="phone" type="tel" required></div>

                    <div class="form-group">

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

                      	<input type="hidden" name="g-recaptcha-response" class="g-recaptcha-response">

                        <button type="submit" name="submit11" class="btn btn-success pull-right">Send It!</button>

                        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


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

            <li><a href="tel:+88 01409350863" class="Blondie-email">+88 01409350863</a></li>

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

                        <a href="tel:+88 01409350863" class="Blondie-email">+88 01409350863</a>



                    </div>

                </div>

            </div>

            <div class="col-md-2 dropdown ">

                <button class="my-button my-button2 dropdown-toggle pull-right" type="button" data-toggle="dropdown"><i class="fas fa-globe"></i>&nbsp;Global



                    <span class="caret"></span></button>

                <ul class="dropdown-menu pull-right">

                    <li><a href="https://www.primacyinfotech.in/"><span><img src="../assets/images/inddd.png" alt="india"> &nbsp;India</span></a></li>

                    <li><a href="https://ca.primacyinfotech.com/"><span><img width="16" height="11" src="../assets/images/canada-flag-xs.png" alt="india"> &nbsp;Canada</span></a></li>

                    <li><a href="https://primacyinfotechltd.com/"><span><img width="16" height="11" src="../assets/images/bangladesh-flag-xs.png" alt="india"> &nbsp;Bangladesh</span></a></li>

                </ul>

            </div>



        </div>

    </div>

</div>

<!--end fixed header-->

<!-- header -->

  

  

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

  fbq('init', '612247759813650');

  fbq('track', 'PageView');

</script>

<noscript><img height="1" width="1" style="display:none"

  src="https://www.facebook.com/tr?id=612247759813650&ev=PageView&noscript=1"

/></noscript>

<!-- End Facebook Pixel Code -->

  

<?php

session_start();

include("../mail/src/Mailjet/php-mailjet-v3-simple.class.php");



$apiKey = 'f6013a7295c2b8cf05912fe6c0734850';

$secretKey = '0fc23d25c6361571ce4047efd75ffb4e';



$mj = new Mailjet($apiKey, $secretKey);





if (isset($_POST['submitcb'])) {

  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

  $recaptcha_response = $_POST['g-recaptcha-response'];

  $recaptcha = file_get_contents($recaptcha_url.'?secret=6LcFWz4aAAAAAMnGoHOd5iKuObns3cOs6hOav5y_&response='.$recaptcha_response);

  $recaptcha = json_decode($recaptcha);

  if ($recaptcha->score >= 0.5) {

    $name = $_POST["name"];

    $mobile = $_POST["mobile"];



    $servername = "localhost";

    $username = "prim_le";

    $password = "i-bFfp5Oq@0p@IGz";

    $dbname = "prim_le";

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

            "to" => "sohinee@primacyinfotech.com",

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

  } else {

    ?>

        <script>swal("Error!", "This is spam.", "error");</script>

<?php

  }

}

if (isset($_POST['submit11'])) {

  $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';

  $recaptcha_response = $_POST['g-recaptcha-response'];

  $recaptcha = file_get_contents($recaptcha_url.'?secret=6LcFWz4aAAAAAMnGoHOd5iKuObns3cOs6hOav5y_&response='.$recaptcha_response);

  $recaptcha = json_decode($recaptcha);

  if ($recaptcha->score >= 0.5) {

    $name = $_POST["name"];

    $email = $_POST["email"];

    $phone = $_POST["phone"];

    $services = $_POST["services"];

    $subject=$_POST["subject"];

    $message1 = $_POST["message"];



    $servername = "localhost";

    $username = "prim_le";

    $password = "i-bFfp5Oq@0p@IGz";

    $dbname = "prim_le";

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

            "to" => "ayushi@primacyinfotech.com",

            "subject" => "New inquiry from : primacy web",

            "html" => "{$message}"

        );



$result1 = $mj->sendEmail($params2);

?>

<script>swal("Success!", "Thank you for your  requset. Out team will Contact you shortly.", "success");</script>

<?php

    } else {

        echo "Error: " . $sql . "<br>" . $con->error;

    }

  } else {

    ?>

        <script>swal("Error!", "This is spam.", "error");</script>

<?php

  }

}

if (isset($_POST['quotes12']) || isset($_POST['submit3'])) {

    $name = $_POST["name"];

    $email = $_POST["email"];

    $phone = $_POST["phone"];

    $services = $_POST["services"];

    $subject=$_POST["subject"];

    $message1 = $_POST["message"];



    $servername = "localhost";

    $username = "prim_le";

    $password = "i-bFfp5Oq@0p@IGz";

    $dbname = "prim_le";

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

            "to" => "ayushi@primacyinfotech.com",

            "subject" => "New inquiry from : primacy web",

            "html" => "{$message}"

        );



$result1 = $mj->sendEmail($params2);

?>

<script>swal("Success!", "Thank you for your  requset. Out team will Contact you shortly.", "success");</script>

<?php

    } else {

        echo "Error: " . $sql . "<br>" . $con->error;

    }

}


?>