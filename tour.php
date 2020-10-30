<?php
include("config.php");
?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/listing-listview.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 06:26:20 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Tourism</title>
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
 <script language="javascript">  
    function SelectRedirect(){

switch(document.getElementById('s1').value)
{
case "Hospital":
window.location="../location/hospi.php";
break;

case "Restaurant":
window.location="../location/cafe.php";
break;

case "Malls":
window.location="../location/mall.php";
break;
case "Theater":
window.location="../location/theater.php";
break;

case "Tourism":
window.location="../location/tour.php";
break;
case "HT":
window.location="../location/hotel.php";
break;
default:
window.location="../"; // if no selection matches then redirected to home page
break;
}// end of switch 
}
</script> 
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

<!-- Inner-Banner -->
<section id="listing_banner" class="parallex-bg">
	<div class="container">
    	<div class="white-text text-center div_zindex">
        	<div class="search_form">
            	<form action="#" method="get">
                <div class="form-group">
                    <div class="select">
                        <SELECT id="s1" name="option"  onChange="SelectRedirect();" class="form-control">
                            <option>  What are you looking for?</option>
                            <option value="Hospital"> Hospital</option>
                            <option value="Restaurant">Restaurant</option>
                            <option value="Malls">Malls</option>
           	                <option value="Theater">Theater</option>
    	                    <option value="Tourism">Tourism</option>
                            <option value="HT">Hotels & Travel</option>
                        </SELECT>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Locaton">
                </div>
                <div class="btn_group">
                    <input type="submit" value="Search" class="btn btn-block">
                </div>
            </form>
            </div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<!-- /Inner-Banner -->

<!-- Listings -->
<section id="inner_pages">
	<div class="container">
    	<div class="listing_header">
        	<h5>List of Tourism</h5>
            <?php
             if(isset($_POST['search']))
            {
                $valueToSearch = $_POST['valueToSearch'];
                // search in all table columns
                // using concat mysql function
                $query = "SELECT * FROM `tourist_spot` WHERE CONCAT(`place_name`,`place_location`, `place_url`, `rating`) LIKE '%".$valueToSearch."%'";
                $search_result = filterTable($query);
                
            }
             else {
                $query = "SELECT * FROM `tourist_spot`";//Enter Table name here
                $search_result = filterTable($query);
            }

            function filterTable($query)
            {
                $connect = mysqli_connect("localhost", "root", "", "location");//Enter database Name Here
                $filter_Result = mysqli_query($connect, $query);
                return $filter_Result;
            }


            $query = "SELECT * FROM tourist_spot";
            $query_run = mysqli_query($con,$query);
            $check_hospital=mysqli_num_rows($query_run) > 0;


            if($check_hospital){

                while($row = mysqli_fetch_assoc($query_run))
                {
                    ?>

        </div>
    	<div class="listview show_listing">
            <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                         



           
           
                        <a href="#"> <?php echo '<img src= "images/'.$row['image'].'" alt="Image">' ?>  </a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#"><?php echo $row['place_name']; ?></a>
                        </div>
                       
                        <p> <?php echo $row['place_location']; ?></p>
                        <a href="<?php echo $row['mall_url']; ?>"><?php echo $row['place_url']; ?></a>
                        <div class="listing_review_info">
                            <p><span class="review_score"><?php echo $row['rating']; ?></span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Jaipur</p>
                        </div>
                    </div>
                </div>
        </div>
          <?php

                    
                }
            }
            else
            {
                echo "No Record found";
            }
            ?>

            </div>
        
        
       <!-- <div class="listview show_listing">
            <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon5.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img6.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Hotels & Travel</a>
                        </div>
                        <h4><a href="#">The Morning Hotel</a></h4>
                        <p>5-star hotel with restaurant, Deluxe Rooms.</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="listview show_listing">
            <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon4.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img3.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Beauty & Spas</a>
                        </div>
                        <h4><a href="#">Blue Women's Parlour</a></h4>
                        <p>5-star Womens Beauty Parlour Services.</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="listview show_listing">
            <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon6.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img5.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Automotive</a>
                        </div>
                        <h4><a href="#">Auto Repair Shop</a></h4>
                        <p>Texaco Auto Servicing & Repair shop</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="listview show_listing">
            <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon2.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img2.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Restaurant</a>
                        </div>
                        <h4><a href="#">Eating Restaurant</a></h4>
                        <p>5-star hotel with restaurant, Deluxe Rooms.</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="listview show_listing">
            <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon1.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img8.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Real Estate</a>
                        </div>
                        <h4><a href="#">The Shelby Apartment</a></h4>
                        <p>Deluxe Rooms with AC</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
        </div>
        <div class="listview show_listing">
            <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon3.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="#"><img src="assets/images/listing_img9.jpg" alt="image"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Health & Fitness</a>
                        </div>
                        <h4><a href="#">Fitness Center</a></h4>
                        <p>Weights, Health, Yoga, Pilates Training Center  </p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Los Angeles</p>
                        </div>
                    </div>
                </div>
        </div> -->
		<nav class="pagination_nav">
          <ul class="pagination">
            <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2 </a></li>
            <li><a href="#">3 </a></li>
            <li><a href="#">4 </a></li>
            <li><a href="#">5 </a></li>
            <li><a href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
          </ul>
        </nav>
    </div>
</section>
<!-- /Listings -->

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

<!-- Mirrored from themes.webmasterdriver.net/Elemo/listing-listview.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 06:26:20 GMT -->
</html>