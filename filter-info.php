<?php
    include("config.php");
?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/blog-grid-style.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 06:28:03 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>filter</title>
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
</head>
<body>
<!-- Header -->
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
<!-- Inner-Banner -->
<section id="listing_banner" class="parallex-bg">
	<div class="container">
    	<div class="white-text text-center div_zindex">
            
        
        	<h1>Your Filtered Information</h1>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
             <?php



            if(isset($_POST['search']))
            {
                $valueToSearch = $_POST['valueToSearch'];
                // search in all table columns
                // using concat mysql function
                $query = "SELECT * FROM `hospital` WHERE CONCAT(`h_id`, `h_name`, `h_address`, `h_pincode`, `url`, `rating`) LIKE '%".$valueToSearch."%'";
                $search_result = filterTable($query);
                
            }
             else {
                $query = "SELECT * FROM `hospital`";//Enter Table name here
                $search_result = filterTable($query);
            }

            function filterTable($query)
            {
                $connect = mysqli_connect("localhost", "root", "", "location");//Enter database Name Here
                $filter_Result = mysqli_query($connect, $query);
                return $filter_Result;
            }
            ?>
<!-- /Inner-Banner -->

<!-- Blog -->

                         <table>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Rating</th>
                                <th>URL</th>
                                <th> PINCODE</th>
                            </tr>
                    <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['h_name'];?></td>
                    <td><?php echo $row['h_address'];?></td>
                    <td><?php echo $row['rating'];?></td>
                 <td> <a href="<?php echo $row['url']; ?>"><?php echo $row['url']; ?></a> </td>
                        <td><?php echo $row['h_pincode'];?></td>
                </tr>
                <?php endwhile;?>
                        </table>
<!-- /Blog -->

<!-- Footer -->
<footer id="footer" class="secondary-bg">
	<div class="container">
    	<div class="row">
        	<div class="col-md-4">
            	<div class="footer_widgets">
                	<h5>Connect with Us</h5>
                    <div class="follow_us">
                    	<ul>
                        	<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
            	<div class="footer_widgets">
                	<h5>Quick Links</h5>
                    <div class="footer_nav">
                    	<ul>
                        	<li><a href="#">How it Work</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms & condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
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
        </div>
    </div>
    
    <div class="footer_bottom">
    	<div class="container">
        	<p>Copyright &copy; 2020 Location-Advisory. All Rights Reserved</p>
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

<!-- Mirrored from themes.webmasterdriver.net/Elemo/blog-grid-style.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 06:28:18 GMT -->
</html>