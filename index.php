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
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  

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
/// Can be extended to other different selections of SubCategory //////
default:
window.location="../"; // if no selection matches then redirected to home page
break;
}// end of switch 
}
////////////////// 
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
                 	<li class="menu-item-has-children"><a href="find_nearby-master/index.php">API</a> <span class="arrow"></span> </li>    
                 	<li class="menu-item-has-children"><a href="hospi.php">Hospital</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="cafe.php">Cafe</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="hotel.php">Hotel</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="mall.php">Malls</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="theater.php">Theater</a> <span class="arrow"></span> </li>
                     <li class="menu-item-has-children"><a href="tour.php">Tourism</a> <span class="arrow"></span> </li>
                  </ul>
                    <li class="menu-item-has-children"><a href="#">User Panel</a> <span class="arrow"></span>
              	 <ul class="sub-menu">
                     <li><a href="admin.php"> Sign In</a></li>
                     
                </ul> 
              </li>
  
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
               	<div class="form-group">
                   		<input type="text" class="form-control" placeholder="Search By Title">
                    </div> 
                  	<div class="form-group select">
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
                  
                    <div class="form-group search_btn">
                    	<input type="submit" value="Search" name="search" class="btn btn-block">
                    </div>
                </form>
            </div>
        </div>
        
        
        
        <div class="categories-list div_zindex">
        	<div class="all-categories-header">
				<h6>Or browse the Listings</h6>

        	</div>
        	<div id="categories-slider">
        		<div class="owl-carousel">
        			<div class="item">
        				<a href="hospi.php">	
							<div class="listing-no">12</div>
							<div class="category_icon"><img src="assets/images/category-icon1.png" alt="image"></div>
							<p>Hospital</p>
						</a>
        			</div>
        			<div class="item">
        				<a href="cafe.php">	
							<div class="listing-no">12</div>
							<div class="category_icon"><img src="assets/images/category-icon2.png" alt="image"></div>
				            <p>Restaurant</p>
						</a>
        			</div>
        			<div class="item">
        				<a href="#">	
							<div class="listing-no">12</div>
							<div class="category_icon"><img src="assets/images/category-icon3.png" alt="image"></div>
							<p>Health & Fitness</p>
						</a>
        			</div>
        			<div class="item">
        				<a href="#">	
							<div class="listing-no">12</div>
							<div class="category_icon"><img src="assets/images/category-icon4.png" alt="image"></div>
							<p>Beauty & Spa</p>
						</a>
        			</div>
        			<div class="item">
        				<a href="hotel.php">	
							<div class="listing-no">12</div>
							<div class="category_icon"><img src="assets/images/category-icon5.png" alt="image"></div>
							<p>Hotels & Travel</p>
						</a>
        			</div>
        			<div class="item">
        				<a href="#">	
							<div class="listing-no">12</div>
							<div class="category_icon"><img src="assets/images/category-icon6.png" alt="image"></div>
							<p>Automotive</p>
						</a>
        			</div>
        		</div>
        	</div>
        </div>
    </div>
    <div class="dark-overlay"></div>
</section>
<!-- /Banner -->


<!-- Listings -->
<section id="listing" class="section-padding gray_bg">
	<div class="container">
		<div class="section-header text-center">
			<h2>Popular Exclusive Listings</h2>
			<p>Hotels, Resorts, Motels… It’s there for your choosing. Do a search or check Olomo’s selection below.</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="listing-wp">
					<div class="listing-thumb">
					<span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon1.png" alt="icon-img" ></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
						<div class="featured_label">Featured</div>
						<a href="fern.php"><img src="images/hotel.jpg" alt="image" width="400" height="400"></a>
					</div>
					<div class="listing-info-wp">
						<h5><a href="fern.php">The Fern Hotel</a></h5>
						<div class="listing-rating">
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star"></i>
							<span>(15 reviews)</span>
						</div>
						<p>Hotel, Fitness Center Gym, Healthcare</p>
						<div class="listing-categories">
							<a href="#">Hotels & Travel</a>
						</div>
					</div>
					<div class="listing-footer">
						<i class="fa fa-map-marker"></i> Jaipur
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="listing-wp">
					<div class="listing-thumb">
					<span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon1.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
						
						<a href="sms.php"><img src="images/hospital.jpg" alt="image" width="400" height="400"></a>
					</div>
					<div class="listing-info-wp">
						<h5><a href="sms.php">Sawai Man Singh Hospital </a></h5>
						<div class="listing-rating">
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<span>(21 reviews)</span>
						</div>
						<p>SMS </p>
						<div class="listing-categories">
							<a href="sms.php">SMS</a>
						</div>
					</div>
					<div class="listing-footer">
						<i class="fa fa-map-marker"></i> Jaipur
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="listing-wp">
					<div class="listing-thumb">
					<span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon1.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
						<div class="featured_label">Featured</div>
						<a href="bs.php"><img src="images/cafe.jpg" alt="image" width="400" height="400"></a>
					</div>
					<div class="listing-info-wp">
						<h5><a href="listing-detail-3.html">Brown Sugar</a></h5>
						<div class="listing-rating">
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star active"></i>
							<i class="fa fa-star"></i>
							<span>(20 reviews)</span>
						</div>
						<p>Cafe</p>
						<div class="listing-categories">
							<a href="bs.php">Brown Sugar</a>
						</div>
					</div>
					<div class="listing-footer">
						<i class="fa fa-map-marker"></i> Jaipur
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Testimonials -->
<section id="reviews" class="section-padding">
	<div class="container">
		<div class="section-header text-center">
			<h2>Words From Our Customer</h2>
			<p>Hearing from our users will make you choose your mind!</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div id="reviews-slider" class="owl-carousel">
					<div class="item">
						<div class="reviews-content">
							<div class="reviews-header">
								<div class="img-wp">
									<img src="assets/images/happy-client-01.jpg" alt="image">
								</div>
								<h6>LEVI RATH</h6>
								<p>Vice Director - Wilson Media</p>
							</div>
							<p>Life before Location-Advisory was very chaotic – we got a lot of phone calls, a lot of mistyped orders. So with Olomo, the ability to see the order directly from the customer makes it so streamlined.</p>
						</div>	
					</div>
					<div class="item">
						<div class="reviews-content">
							<div class="reviews-header">
								<div class="img-wp">
									<img src="assets/images/happy-client-03.jpg" alt="image">
								</div>
								<h6>WILLIAM STEVES</h6>
								<p>CEO of - XYZ PVT.</p>
							</div>
							<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible procedures.</p>
						</div>	
					</div>
					<div class="item">
						<div class="reviews-content">
							<div class="reviews-header">
								<div class="img-wp">
									<img src="assets/images/happy-client-02.jpg" alt="image">
								</div>
								<h6>ESTHER BUECHE</h6>
								<p>Vice Director - Wilson Media</p>
							</div>
							<p>Objectively innovate empowered manufactured products whereas parallel platforms. Holisticly predominate extensible procedures.</p>
						</div>	
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="ratings-wrap">
					<div class="ratings-inner-wp">
						<div class="our-ratings">4.8/5</div>
						<p class="ratings-label">Rating in</p>
						<div class="playstore-btn">
							<a href="#"><img src="assets/images/google-play.png" alt="image"></a>
						</div>	
						<p>Great web showing all Listing data at one platform in detailed in secured way.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Testimonials -->

<!-- Blog -->
<section id="blog" class="section-padding gray_bg">
	<div class="container">
		<div class="section-header text-center">
			<h2>Articles from Location-Advisory</h2>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
			Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer.</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="blog-wrap">
					<div class="blog-img">
						<a href="#"><img src="assets/images/blog-img-1.jpg" alt="image"></a>
					</div>
					<div class="blog-content">
						<div class="blog-categories">
							<a href="#">Restaurant</a>
							<a href="#">Tips & Tricks</a>
						</div>
						<h5><a href="#">It has survived not only</a></h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
					<div class="blog-meta">
						<p>By: <a href="#">admin</a></p>
						<p>On: <a href="#">Feb 28, 2020</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-wrap">
					<div class="blog-img">
						<a href="#"><img src="assets/images/blog-img-2.jpg" alt="image"></a>
					</div>
					<div class="blog-content">
						<div class="blog-categories">
							<a href="#">Restaurant</a>
							<a href="#">Tips & Tricks</a>
						</div>
						<h5><a href="#">It has survived not only</a></h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
					<div class="blog-meta">
						<p>By: <a href="#">admin</a></p>
						<p>On: <a href="#">Feb 28, 2020</a></p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="blog-wrap">
					<div class="blog-img">
						<a href="#"><img src="assets/images/blog-img-3.jpg" alt="image"></a>
					</div>
					<div class="blog-content">
						<div class="blog-categories">
							<a href="#">Restaurant</a>
							<a href="#">Tips & Tricks</a>
						</div>
						<h5><a href="#">It has survived not only</a></h5>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
					<div class="blog-meta">
						<p>By: <a href="#">admin</a></p>
						<p>On: <a href="#">Feb 28, 2020</a></p>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>
<!-- /Blog -->

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
</body>
</html>