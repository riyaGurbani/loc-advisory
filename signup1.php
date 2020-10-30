<?php
include("config.php");
?>
<!DOCTYPE HTML>
<html lang="en">


<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Register with us!!</title>
    <script language="javascript">
function check()
{

 if(document.form1.name.value=="")
  {
    alert("Plese Enter your name");
	document.form1.name.focus();
	return false;

  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.dob.value=="")
  {
    alert("Plese Enter Your Date of Birth!");
	document.form1.dob.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  }
  
</script>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">

<link rel="stylesheet" href="assets/css/style.css" type="text/css">

<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">

<link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" data-default-color="true" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
            

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 

</head>
<body>
    <?php    
 if(isset($_POST["submit"]))
 {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $dob = $_POST['dob'];
  $phone = $_POST['phone'];
  $pwd = $_POST['pass'];
  $cpwd = $_POST['cpass'];
  $sql = "INSERT INTO registration (name,email,dob,phone,pwd,confirm_pwd) VALUES ('$name','$email','$dob','$phone','$pwd','$cpwd')";
  if(!mysqli_query($con,$sql))
  {
  echo 'Not Able to Register';
  }
  else
  {
  echo 'Registered!';
  }
  // header("refresh:2" url=index.html)
  ?>
  
  


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
   
<?php } ?>    
<section class="primary-bg">
	<div class="container">
    	<div id="login_signup">
            <div class="form_wrap_m">
            	<div class="white_box">
                	<h3>Sign Up</h3>
	                <form name="form1" action="" method="post" onsubmit="return check();">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                        </div>
                          <div class="form-group">
                            <input type="date" class="form-control" placeholder="Date of Birth" name="dob">
                        </div>
                          <div class="form-group">
                            <input type="number" class="form-control" placeholder="Phone Number" name="phone">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password" name="pass">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder=" Confirm Password" name="cpass">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-block" value="Sign Up" name="submit">
                        </div>
                    </form>
                    <p>Already have an account? <a href="signin.html">Sign In</a></p>
                    <div class="back_home"><a href="index.html" class="btn outline-btn btn-sm"><i class="fa fa-angle-double-left"></i> Back to Home</a></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/switcher/js/switcher.js"></script>
</body>
</html>