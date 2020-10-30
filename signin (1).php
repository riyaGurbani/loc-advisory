<?php
include("config.php");

?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 06:29:41 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Elemo - Directory & Listings HTML Template</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
   <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
            
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
</head>
<body>
<!-- Start Switcher -->
    <!-- 
    <div class="switcher-wrapper">	
        <div class="demo_changer">
            <div class="demo-icon customBgColor"><i class="fa fa-cog fa-spin fa-2x"></i></div>
            <div class="form_holder">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="predefined_styles">
                            <div class="skin-theme-switcher">
                                <h4>Color</h4>
                                <a href="#" data-switchcolor="blue" class="styleswitch" style="background-color:#38ccff;"> </a>
                                <a href="#" data-switchcolor="pink" class="styleswitch" style="background-color:#FF2761;"> </a>
                                 <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#000000;"> </a>
                                <a href="#" data-switchcolor="orange" class="styleswitch" style="background-color:#f76d2b;"> </a>
                                <a href="#" data-switchcolor="green" class="styleswitch" style="background-color:#2dcc70;"> </a>
                                <a href="#" data-switchcolor="red" class="styleswitch" style="background-color:#de302f;"> </a>
                                <a href="#" data-switchcolor="purple" class="styleswitch" style="background-color:#6054c2;"> </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    
<section class="primary-bg">
	<div class="container">
    	<div id="login_signup">
            <div class="form_wrap_m">
            	<div class="white_box">
                	<h3>Hey, Welcome Back!</h3>
	                <form action="" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="pass">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block" value="Login" name="submit">
                        </div>
                    </form>
                    <p>Don't have an account? <a href="signup.php">Signup Here</a></p>
                    <p><a href="lost-password.html">Lost your password?</a></p>
                    <div class="back_home"><a href="index.html" class="btn outline-btn btn-sm"><i class="fa fa-angle-double-left"></i> Back to Home</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
    <? php
    
if (isset($_POST['submit'])) {
  $email = mysqli_real_escape_string($con, $_POST['email]);
  $pass = mysqli_real_escape_string($con, $_POST['pass']);

  if (empty($email)) {
  	array_push($errors, "Email is required");
  }
  if (empty($pass)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$pass = md5($pass);
  	$query = "SELECT * FROM registration WHERE email='$email' AND pwd='$pass'";
  	$results = mysqli_query($con, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['email'] = $email;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.html');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>
<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script><script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Carousel-JS--> 
<script src="assets/js/owl.carousel.min.js"></script>
 <!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 06:29:44 GMT -->
</html>