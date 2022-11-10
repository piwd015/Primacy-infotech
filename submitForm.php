<?php 
session_start();
include("mail/src/Mailjet/php-mailjet-v3-simple.class.php");

$apiKey = 'f6013a7295c2b8cf05912fe6c0734850';
$secretKey = '0fc23d25c6361571ce4047efd75ffb4e';

$mj = new Mailjet($apiKey, $secretKey);


if (isset($_POST['getQuote']))
{
	$name=$_POST["name"]; 
	$email=$_POST["email"]; 
	$phone=$_POST["phone"]; 
	$comment=$_POST["comment"]; 

	$servername = "localhost";
	$username = "primacy_1";
	$password = "Piwd@2020";
	$dbname = "primacy_1";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}

	$sql = "INSERT INTO get_quote (name, email, phone, comment) VALUES ('".$name."', '".$email."', '".$phone."', '".$comment."')";

	if ($con->query($sql) === TRUE) {
		$message = "
		<html>
    		<head>
    		    <title>Get Quote</title>
    		</head>
    		<body>
    		    <p>Quote Details</p>
    		    <table>
    		        <tr>
    		            <td>Name : </td>
    		            <td>".$name."</td>
    		        </tr>
    		        <tr>
    		            <td>Email : </td>
    		            <td>".$email."</td>
    		        </tr>
    		        <tr>
    		            <td>Phone : </td>
    		            <td>".$phone."</td>
    		        </tr>
    		        <tr>
    		            <td>Name : </td>
    		            <td>".$comment."</td>
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
            "subject" => "Quote from Primacy Infotech",
            "html" => "{$message}"
        );
        $result = $mj->sendEmail($params);
        $params1 = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "sudipta@primacyinfotech.com",
            "subject" => "Quote from Primacy Infotech",
            "html" => "{$message}"
        );
        $result1 = $mj->sendEmail($params1);
        $params2 = array(
            "method" => "POST",
            "from" => "info@primacyinfotech.com",
            "to" => "info@primacyinfotech.com",
            "subject" => "Quote from Primacy Infotech",
            "html" => "{$message}"
        );
        $result2 = $mj->sendEmail($params2);
        
       
		$_SESSION['flash'] = '<script>swal("Success!", "Thank you for joining with Us. Out team will Contact you shortly.", "success");</script>';
		echo "<script>window.location.replace('http://primacyinfotech.com/');</script>";
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();	

}

if (isset($_POST['contact_us_touch']))
{
	$name=$_POST["name"]; 
	$email=$_POST["email"]; 
	$subject=$_POST["subject"]; 
	$message1=$_POST["message"]; 

	$servername = "localhost";
	$username = "primacy_1";
	$password = "Piwd@2020";
	$dbname = "primacy_1";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}

	$sql = "INSERT INTO contact_us_touch (name, email, subject, message) VALUES ('".$name."', '".$email."', '".$subject."', '".$message."')";

	if ($con->query($sql) === TRUE) {
	    $message = "
		<html>
    		<head>
    		    <title>Contact request</title>
    		</head>
    		<body>
    		    <p>Contact request Details</p>
    		    <table>
    		        <tr>
    		            <td>Name : </td>
    		            <td>".$name."</td>
    		        </tr>
    		        <tr>
    		            <td>Email : </td>
    		            <td>".$email."</td>
    		        </tr>
    		        <tr>
    		            <td>Subject : </td>
    		            <td>".$subject."</td>
    		        </tr>
    		        <tr>
    		            <td>Message : </td>
    		            <td>".$message1."</td>
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
            "subject" => "Contact request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result = $mj->sendEmail($params);
        $params1 = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "sudipta@primacyinfotech.com",
            "subject" => "Contact request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result1 = $mj->sendEmail($params1);
        $params2 = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "info@primacyinfotech.com",
            "subject" => "Contact request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result2 = $mj->sendEmail($params2);
        
        $_SESSION['flash'] = '<script>swal("Success!", "Thank you for Contact request. Out team will Contact you shortly.", "success");</script>';
        
		echo "<script>window.location.replace('http://primacyinfotech.com/contact.php');</script>";
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();	

}

if (isset($_POST['quotes']) || isset($_POST['quotes1']) || isset($_POST['quotes2']) || isset($_POST['quotes3']) || isset($_POST['quotes4']) || isset($_POST['quotes5']) || isset($_POST['quotes6']) || isset($_POST['quotes7']) || isset($_POST['quotes8']) || isset($_POST['quotes9']) || isset($_POST['quotes10']) || isset($_POST['quotes11']) || isset($_POST['quotes12']) || isset($_POST['quotes13']) || isset($_POST['quotes14']) || isset($_POST['quotes15']) || isset($_POST['quotes16']) || isset($_POST['quotes17']) || isset($_POST['quotes18']) || isset($_POST['quotes19']))
{
	$name=$_POST["name"]; 
	$email=$_POST["email"]; 
	$phone=$_POST["phone"]; 
	$services=$_POST["services"]; 
	$message1=$_POST["message"]; 

	$servername = "localhost";
	$username = "primacy_1";
	$password = "Piwd@2020";
	$dbname = "primacy_1";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}

	$sql = "INSERT INTO quotes (name, email, phone, services, message) VALUES ('".$name."', '".$email."', '".$phone."', '".$services."', '".$message."')";

	if ($con->query($sql) === TRUE) {
	    $message = "
		<html>
    		<head>
    		    <title>Get Started Request</title>
    		</head>
    		<body>
    		    <p>Get Started Request details</p>
    		    <table>
    		        <tr>
    		            <td>Name : </td>
    		            <td>".$name."</td>
    		        </tr>
    		        <tr>
    		            <td>Email : </td>
    		            <td>".$email."</td>
    		        </tr>
    		        <tr>
    		            <td>Phone : </td>
    		            <td>".$phone."</td>
    		        </tr>
    		        <tr>
    		            <td>Service : </td>
    		            <td>".$services."</td>
    		        </tr>
    		        <tr>
    		            <td>Message : </td>
    		            <td>".$message1."</td>
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
            "subject" => "Get Started Request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result = $mj->sendEmail($params);
        $params1 = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "sudipta@primacyinfotech.com",
            "subject" => "Get Started Request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result1 = $mj->sendEmail($params1);
        $params2 = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "info@primacyinfotech.com",
            "subject" => "Get Started Request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result2 = $mj->sendEmail($params2);
        
        $_SESSION['flash'] = '<script>swal("Success!", "Thank you for Request. We will Contact you shortly.", "success");</script>';
        
		if(isset($_POST['quotes']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/web-developement.php');</script>";
		}elseif(isset($_POST['quotes1']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/web-designing.php');</script>";
		}elseif(isset($_POST['quotes2']))
		{
			echo "<script>window.location.replace(mobile-app-developemnt.php);</script>";
		}elseif(isset($_POST['quotes3']))
		{
			echo "<script>window.location.replace(crm-erp-portal-development.php);</script>";
		}elseif(isset($_POST['quotes4']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/digital-marketing.php');</script>";
		}elseif(isset($_POST['quotes5']))
		{
			echo "<script>window.location.replace(ui-ux Desing.phpng.php');</script>";
		}elseif(isset($_POST['quotes6']))
		{
			echo "<script>window.location.replace(mlm-software-development .phmlm-software-development .php
		}elseif(isset($_POST['quotes7']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/readymade-realestate-portal.php');</script>";
		}elseif(isset($_POST['quotes8']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/readymade-cab-booking-app.php');</script>";
		}elseif(isset($_POST['quotes9']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/school-managmest-system.php');</script>";
		}elseif(isset($_POST['quotes10']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/portal-accounting.php');</script>";
		}elseif(isset($_POST['quotes11']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/food-order-app.php');</script>";
		}elseif(isset($_POST['quotes12']))
		{
			echo "<script>window.location.replace('../product/readymade-grocery-delivery-app.php');</script>";
		}elseif(isset($_POST['quotes13']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/recharge-bill-payment-portal-b2b-b2c.php');</script>";
		}elseif(isset($_POST['quotes14']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/readymade-online-education-app.php');</script>";
		}elseif(isset($_POST['quotes15']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/loan-mangment-system.php');</script>";
		}elseif(isset($_POST['quotes16']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/readymade-video-streaming-app.php');</script>";
		}elseif(isset($_POST['quotes17']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/readymade-pharmacy-app.php');</script>";
		}elseif(isset($_POST['quotes18']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/pistore.php');</script>";
		}elseif(isset($_POST['quotes19']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/career.php');</script>";
		}		
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();	

}

if (isset($_POST['contact_form']) || isset($_POST['contact_form1']) || isset($_POST['contact_form2']) || isset($_POST['contact_form3']) || isset($_POST['contact_form4']) || isset($_POST['contact_form5']) || isset($_POST['contact_form6']) || isset($_POST['contact_form7']) || isset($_POST['contact_form8']) || isset($_POST['contact_form9']) || isset($_POST['contact_form10']) || isset($_POST['contact_form11']) || isset($_POST['contact_form12']) || isset($_POST['contact_form13']) || isset($_POST['contact_form14']) || isset($_POST['contact_form15']) || isset($_POST['contact_form16']) || isset($_POST['contact_form18']) || isset($_POST['contact_form19']))
{
	$name=$_POST["name"]; 
	$email=$_POST["email"]; 
	$phone=$_POST["phone"]; 
	$services=$_POST["services"]; 
	$subject=$_POST["subject"]; 
	$message1=$_POST["message"]; 

	$servername = "localhost";
	$username = "primacy_1";
	$password = "Piwd@2020";
	$dbname = "primacy_1";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}

	$sql = "INSERT INTO contact_information (name, email, phone, services, subject, message) VALUES ('".$name."', '".$email."', '".$phone."', '".$services."', '".$subject."', '".$message."')";

	if ($con->query($sql) === TRUE) {
	    
	    $message = "
		<html>
    		<head>
    		    <title>Contact Request</title>
    		</head>
    		<body>
    		    <p>Contact Request details</p>
    		    <table>
    		        <tr>
    		            <td>Name : </td>
    		            <td>".$name."</td>
    		        </tr>
    		        <tr>
    		            <td>Phone : </td>
    		            <td>".$phone."</td>
    		        </tr>
    		         <tr>
    		            <td>Email : </td>
    		            <td>".$email."</td>
    		        </tr>
    		         <tr>
    		            <td>Service : </td>
    		            <td>".$services."</td>
    		        </tr>
    		         <tr>
    		            <td>Subject : </td>
    		            <td>".$subject."</td>
    		        </tr>
    		        <tr>
    		            <td>Message : </td>
    		            <td>".$message1."</td>
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
            "subject" => "Contact Request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result = $mj->sendEmail($params);
        $params1 = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "sudipta@primacyinfotech.com",
            "subject" => "Contact Request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result1 = $mj->sendEmail($params1);
        $params2 = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "info@primacyinfotech.com",
            "subject" => "Contact Request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result2 = $mj->sendEmail($params2);
        
        $_SESSION['flash'] = '<script>swal("Success!", "Thank you for request. Out team will Contact you shortly.", "success");</script>';
        
		if(isset($_POST['contact_form']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/web-developement.php');</script>";
		}elseif(isset($_POST['contact_form1']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/web-designing.php');</script>";
		}elseif(isset($_POST['contact_form2']))
		{
			echo "<script>window.location.replace(mobile-app-developemnt.php);</script>";
		}elseif(isset($_POST['contact_form3']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/crm-erp.php');</script>";
		}elseif(isset($_POST['contact_form4']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/digital-marketing.php');</script>";
		}elseif(isset($_POST['contact_form5']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/ui-ux-desing.php');</script>";
		}elseif(isset($_POST['contact_form6']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/portal-mlm.phpmlm-software-development .php
		}elseif(isset($_POST['contact_form7']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/readymade-realestate-portal.php');</script>";
		}elseif(isset($_POST['contact_form8']))
		{
			echo "<script>window.location.replace(readymade-cab-booking-app.php);</script>";
		}elseif(isset($_POST['contact_form9']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/school-managmest-system.php');</script>";
		}elseif(isset($_POST['contact_form10']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/portal-accounting.php');</script>";
		}elseif(isset($_POST['contact_form11']))
		{
			echo "<script>window.location.replace(readymade-food-delivery-app.php);</script>";
		}elseif(isset($_POST['contact_form12']))
		{
			echo "<script>window.location.replace(readymade-grocery-delivery-areadymade-grocery-delivery-app.php>";
		}elseif(isset($_POST['contact_form13']))
		{
			echo "<script>window.location.replace(recharge-bill-payment-portalrecharge-bill-payment-portal-b2b-b2c.phpipt>";
		}elseif(isset($_POST['contact_form14']))
		{
			echo "<script>window.location.replace(readymade-online-education-areadymade-online-education-app.phppt>";
		}elseif(isset($_POST['contact_form15']))
		{
			echo "<script>window.location.replace(loan-mangment-system.php);</loan-mangment-system.phpseif(isset($_POST['contact_form16']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/readymade-video-streaming-app.php');</script>";
		}elseif(isset($_POST['contact_form18']))
		{
			echo "<script>window.location.replace(readymade-ecommerces-app.php);</script>";
		}elseif(isset($_POST['contact_form19']))
		{
			echo "<script>window.location.replace('http://primacyinfotech.com/career.php');</script>";
		}
		
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();	

}

if (isset($_POST['callBackReq']) || isset($_POST['callBackReq1']) || isset($_POST['callBackReq2']) || isset($_POST['callBackReq3']) || isset($_POST['callBackReq4']) || isset($_POST['callBackReq5']) || isset($_POST['callBackReq6']) || isset($_POST['callBackReq7']) || isset($_POST['callBackReq8']) || isset($_POST['callBackReq9']) || isset($_POST['callBackReq10']) || isset($_POST['callBackReq11']) || isset($_POST['callBackReq12']) || isset($_POST['callBackReq13']) || isset($_POST['callBackReq14']) || isset($_POST['callBackReq15']) || isset($_POST['callBackReq16']) || isset($_POST['callBackReq17']) || isset($_POST['callBackReq18']) || isset($_POST['callBackReq19']))
{
	$name=$_POST["name"]; 
	$mobile=$_POST["mobile"]; 

	$servername = "localhost";
		$username = "primacy_1";
	$password = "Piwd@2020";
	$dbname = "primacy_1";
	$con = new mysqli($servername, $username, $password, $dbname);
	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}

	$sql = "INSERT INTO call_back_request (name, mobile) VALUES ('".$name."', '".$mobile."')";

	if ($con->query($sql) === TRUE) 
	{
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
    		            <td>".$name."</td>
    		        </tr>
    		        
    		        <tr>
    		            <td>Phone : </td>
    		            <td>".$mobile."</td>
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
        $result1 = $mj->sendEmail($params1);
        $params2 = array(
            "method" => "POST",
            "from" => "leads@primacyinfotech.com",
            "to" => "info@primacyinfotech.com",
            "subject" => "Call Back Request from Primacy Infotech",
            "html" => "{$message}"
        );
        $result2 = $mj->sendEmail($params2);
        
	    $_SESSION['flash'] = '<script>swal("Success!", "Thank you for your call back requset. Out team will Contact you shortly.", "success");</script>';
	    
	    if(isset($_POST['callBackReq']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/web-developement.php');</script>";
	    }elseif(isset($_POST['callBackReq1']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/web-designing.php');</script>";
	    }elseif(isset($_POST['callBackReq2']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/android-developemnt.php');</script>";
	    }elseif(isset($_POST['callBackReq3']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/crm-erp.php');</script>";
	    }elseif(isset($_POST['callBackReq4']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/digital-marketing.php');</script>";
	    }elseif(isset($_POST['callBackReq5']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/ui-ux-desing.php');</script>";
	    }elseif(isset($_POST['callBackReq6']))
	    {
	    	echo "<script>window.location.replace(mlm-software-development.php);</script>";mlm-software-development .phpisset($_POST['callBackReq7']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/readymade-realestate-portal.php');</script>";
	    }elseif(isset($_POST['callBackReq8']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/readymade-cab-booking-app.php');</script>";
	    }elseif(isset($_POST['callBackReq9']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/school-managmest-system.php');</script>";
	    }elseif(isset($_POST['callBackReq10']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/portal-accounting.php');</script>";
	    }elseif(isset($_POST['callBackReq11']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/food-order-app.php');</script>";
	    }elseif(isset($_POST['callBackReq12']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/grocery-shoreadymade-grocery-delivery-app.php>";
	    }elseif(isset($_POST['callBackReq13']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/portal-rrecharge-bill-payment-portal-b2b-b2c.phpipt>";
	    }elseif(isset($_POST['callBackReq14']))
	    {
	    	echo "<script>window.location.replace(readymade-online-education-app.php);<readymade-online-education-app.php  }elseif(isset($_POST['callBackReq15']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/portal-loan.php');</loan-mangment-system.php}elseif(isset($_POST['callBackReq16']))
	    {
	    	echo "<script>window.location.replace(readymade-video-streaming-apreadymade-video-streaming-app.php";
	    }elseif(isset($_POST['callBackReq17']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/readymade-pharmacy-app.php');</script>";
	    }elseif(isset($_POST['callBackReq18']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/pistore.php');</script>";
	    }elseif(isset($_POST['callBackReq19']))
	    {
	    	echo "<script>window.location.replace('http://primacyinfotech.com/career.php');</script>";
	    }		
	    
	} else {
	    echo "Error: " . $sql . "<br>" . $con->error;
	}

	$con->close();	

} 
























	?>