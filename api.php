<?php 

?>

<!DOCTYPE HTML>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Location-Advisory</title>
    <meta charset="utf-8">
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Bungee+Inline" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Architects+Daughter" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Quantico" rel="stylesheet"> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Location-Advisory</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png">
<!-- Google-Font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700,800" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDmFqQa3GmRdYRtITKJnv3qF3-tsL5H2A&v=3.exp&sensor=false&libraries=places"></script>
  <script type="text/javascript">
               function initialize() {
                       var input = document.getElementById('place_location');
                       var autocomplete = new google.maps.places.Autocomplete(input);
               }
               google.maps.event.addDomListener(window, 'load', initialize);
       </script>
  
  <script src="https://use.fontawesome.com/4ade0e5ef1.js"></script>
    
    <style type="text/css">

    .jumbotron 
    {
             
      /*margin-top: 50px;*/
      color: black;
      background: url("jumbotron_img/map.jpg") no-repeat center center;       
     -webkit-background-size: 100% 100%;
     -moz-background-size: 100% 100%;
     -o-background-size: 100% 100%;
      background-size: 100% 100%;

     }

     .navbar{
    background-color: transparent;
    border-style: none;    
    color:green;
    height: 50px;
    text-align: center;
    font-family: 'Luckiest Guy', cursive;
    font-size: 20px;
      


     }

     .active{
      background-color: green;
     } 
    footer
    {
      background-color: #121212;
      margin-top:30px;
      position:relative;
      padding: 10px;           
      height:60px;
      color: white;
      position: relative;
      right: 0;
      bottom: 0;
      left: 0;
    }


     


  </style>
    
    
</head>
<body>
<!-- Header -->
<header id="header" class="transparent-header">
    <nav class="navbar navbar-expand-lg fixed-top" id="header_nav">
        <div class="container-fluid">
		<div class="row header_row">	
		<div class="col-md-3 col-sm-12 col-xs-12">
          <div class="navbar-header">
            <div class="logo"> <a href="index.php"><img src="images/logo.png" alt="image" height="70"/></a> </div>
			</div>
 <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggler" type="button"> 
                <i class="fa fa-bars"></i> 
            </button>
		</div>
           
          
<div class="col-md-9 col-sm-12 col-xs-12">
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="nav navbar-nav mr-auto">
                <li><a href="index.php"> Home</a></li>
              <li class="menu-item-has-children"><a href="#">Show By</a> <span class="arrow"></span>
              	 <ul class="sub-menu">
                 	<li class="menu-item-has-children"><a href="find_nearby-master/index.php">API</a> <span class="arrow"></span> </li>    
                 	<li class="menu-item-has-children"><a href="hospi.php">Hospital</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="cafe.php">Cafe</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="hotel.php">Hotel</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="mall.php">Malls</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="theater.php">Theater</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="tour.php">Tourism</a> <span class="arrow"></span> </li>
                  </ul>
 
              <li><a href="signin.php"> Sign In</a></li>
            </ul>
          </div>
</div>
		</div>
        </div>
    </nav>
</header>
<!-- /Header -->

<!-- Banner -->
<section id="banner" class="intro-bg parallex-bg section-padding">
	<div class="container">
    	<div class="intro_text white-text div_zindex">
    		<h1>Find & Explore Nearest Stores</h1>
	        <h5>Search the best places to eat, drink, and shop nearest to you</h5>
            <div class="search_form style3">
            	<form action="index.php" method="get">
                  
                  <!--  
                    <div class="form-group select">
                   		<select class="form-control">
                	    	<option>Select a Location</option>
            	            <option>Location 1</option>
                            <option>Location 2</option>
                            <option>Location 3</option>
        	                <option>Location 4</option>
	                    </select>
                    </div>
                    -->
                    
                </form>
            </div>
        </div>
        
    </div>
    <div class="dark-overlay"></div>
</section>
<!-- /Banner -->

<!-- About-us -->
<div class="container-fluid text-center" style="background-color:#A7C2E2; ">
  <div id="brief">
  <h2 style="text-align: center; color:#080C17;font-family: 'Quantico', sans-serif;  ";>Choose what to find nearby..</h2>
  <p style="font-size: 18px; ">
    
  </p>  
  </div>
</div>


 <div class="container" style="margin-top:50px;">
        <!-- form begins-->
        <form role="form"  method="POST" action="results_display.php">
          
          <div class="form-group" >
            <input type="text" class="form-control" name="location" id="place_location" placeholder="Enter the address of the location.."  style="align:center"/>                               
          </div>
          
          <div class="form-group">
            <select class="form-control" name="keyword">            

              <option value="doctor" >Doctor</a></option><!--2-->
              <option value="hospital" >Hospital</option><!--3-->
              <option value="atm" >ATM</option><!--4-->
              <option value="park" >Park</option><!--5-->
              <option value="police" >Police Station</option><!--6-->                    
              <option value="restaurant" >Restaurant</option><!--7-->
              <option value="shopping_mall" >Shopping Mall</option><!--8-->
              <option value="amusement_park" >Amusement Park</option><!--9-->
              <option value="bank" >Bank</option><!--10-->
              <option value="movie_theater" >Movie Theater</option><!--11-->
              <option value="clothing_store" >Clothing Store</option><!--12-->
              <option value="department_store" >Department Store</option><!--13-->
              <option value="electronics_store" >Electronics Store</option><!--14-->
              <option value="gas_station" >Gas Station</option><!--15-->
              <option value="taxi_stand" >Taxi Stand</option><!--16-->
              <option value="pharmacy" >Pharmacy</option><!--17-->
              <option value="fire_station" >Fire Station</option><!--1-->
              <option value="meal_takeaway" >Meal takeaway</option><!--1-->
              <option value="parking" >Parking</option><!--1-->
              <option value="physiotherapist" >Physiotherapist</option><!--1-->
              <option value="cafe" >Cafe</option><!--1-->
              <option value="book_store" >Book store</option><!--1-->
              <option value="gym" >Gym</option><!--1-->

              
            </select> 
 
          </div>

          <div class="col-xs-6 col-sm-6 col-md-6">
              <input type="submit" name="submit_mes" value="SEARCH" class="btn btn-lg btn-success btn-block"><hr>
          </div>

        </form>
        <!-- end form-->

 </div>      

 <?php

 if (isset($_POST['submit_mes']))
  { 
      $_SESSION['key_val'] = $_POST['keyword'];
  }
?>
<!-- /About-us -->


<!-- Footer -->
<footer id="footer" class="footer_2 secondary-bg">
	<div class="container">
    	<div class="footer_widgets">
            <h5>Our Newsletter</h5>
            <div class="newsletter_wrap">
                <form action="#" method="get">
                    <input type="email" class="form-control" placeholder="Enter Email Address">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>
        </div>
        
   
        
    </div>
    
    <div class="footer_bottom">
    	<div class="container">
        	<div class="row">
            	
				<div class="col-md-6">
            		<p>Copyright &copy; 2020 Location-Advisory. All Rights Reserved</p>    
                </div>
				
				<div class="col-md-6">
                	<div class="follow_us">
                    	<ul>
                        	<li><a href="www.facebook.com"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="www.twitter.com"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="www.linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="www.googleplus.com"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Carousel-JS--> 
<script src="assets/js/owl.carousel.min.js"></script>    
 <!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 06:20:03 GMT -->
</html>