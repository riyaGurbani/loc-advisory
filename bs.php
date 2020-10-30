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
<title>Brown Sugars </title>
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
    <?php    
 if(isset($_POST["R_submit"]))
 {
     $rate = $_POST['rate'];
  $email = $_POST['email'];
  $title = $_POST['title'];
  $review = $_POST['review'];
  $sql = "INSERT INTO feedback (email,title,review) VALUES ('$email','$title','$review')";
     if ($con->query($sql) === TRUE) {
         ?>
    <script>
  alert("New record created successfully");
        </script>
    <?php 
}
     else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
    header("Refresh: 5; url=fern.php"); 
  /*if(!mysqli_query($con,$sql))
  {
  echo 'Not Able to Review';
  }
  else
  {
  echo 'submitted!';
  }*/
     
      // header("Refresh: 5; url=index.php");
 }
    ?>

    
<!-- Header -->
<header id="header" class="transparent-header">
    <nav class="navbar navbar-expand-lg fixed-top" id="header_nav">
        <div class="container-fluid">
		<div class="row header_row">	
		<div class="col-md-3 col-sm-12 col-xs-12">
          <div class="navbar-header">
            <div class="logo"> <a href="index.php"><img src="images/logo.jpeg" alt="image"/></a> </div>
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

<!-- Image-Slider -->
<section id="listing_detail_banner" class="parallex-bg">
	<div id="listing_img_slider">
    	<div class="owl-carousel owl-theme">
           <div class="item"><img src="images/bs.jpg" alt="image" height="380" width="530"></div>
           <div class="item"><img src="images/bs1.jpg" alt="image" height="380" width="530"></div>
          <div class="item"><img src="images/bs3.jpg" alt="image" height="380" width="530"></div>
           <div class="item"><img src="images/bs4.jpg" alt="image" height="380" width="530"></div>
           <div class="item"><img src="images/bs5.jpg" alt="image" height="380" width="530"></div>
          
             <div class="item"><img src="images/bs6.jpg" alt="image" height="380" width="530"></div>
        </div>   
    </div>
    <div class="view_map">
	    <a href="https://www.google.com/maps/dir//Plot+No.+3,+The+Fern+An+Ecotel+Hotel,+Jaipur,+Airport+Plaza,+Tonk+Rd,+Chandrakala+Colony,+Mata+colony,+Jaipur,+Rajasthan+302018/@26.843642,75.7241085,12z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x396db2c560944d1f:0x238071aabbf2224a!2m2!1d75.7941488!2d26.8436592?hl=en" class="js-target-scroll"><i class="fa fa-map-marker"></i></a>
    </div>
</section>
<!-- /Image-Slider -->

<section class="listing_detail_header">
	<div class="container">
    	<h1>Brown Sugars </h1>
        <p>5-star cafe. Perfect Place to hangout with your friends</p>
        <div class="listing_rating">
            <p><span class="review_score">4.5/5</span> 
               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
               (5 Reviews) </p>
            <p class="listing_like"><a href="#"><i class="fa fa-heart-o"></i> 10 Likes</a></p>
            <p class="listing_favorites"><a href="#"><i class="fa fa-bookmark-o"></i> Add to favorites</a></p>   
        </div>   
    </div>
</section>

<!-- Listings -->
<section class="listing_info_wrap">
	<div class="container">
    	<div class="row">
        	<div class="col-md-8">
            	<div class="ElemoListing_detail">
                	<div class="pricing_info">
                    	<p class="listing_price">750 for two</p>
                        <div class="listing_message"><a class="btn" data-toggle="modal" data-target="#message_modal"><i class="fa fa-envelope-o"></i> Send Message</a></div>
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                              <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#description" aria-expanded="true" aria-controls="collapseOne">
                                 <i class="fa  fa-file-text-o"></i> Description</a>
                                </a>
                              </h4>
                            </div>
                            <div id="description" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                              <div class="panel-body">
                                <p>Its more than just a cafe or a cake shop. Its a hangout place, its a foodies paradise, its a one stop solution to your bakery needs.</p>
                              </div>
                            </div>
                          </div>
                          
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#amenities" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-align-left"></i>Facilities</a>
                              </h4>
                            </div>
                            <div id="amenities" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                              <div class="panel-body">
                                <ul>
                                	<li><a href="#"><i class="fa fa-credit-card"></i> Accepts Credit cards</a></li>
                                    <li><a href="#"><i class="fa fa-paw"></i> Pets Friendly</a></li>
                                    <li><a href="#"><i class="fa fa-ban"></i> No Smoking</a></li>
                                     <li><a href="#"><i class="fa fa-snowflake-o"></i> Air Conditioning</a></li>
                                    <li><a href="#"><i class="fa fa-car"></i> Street Parking</a></li>
                                    <li><a href="#"><i class="fa fa-wifi"></i> Wireless Internet</a></li>
                                    <li><a href="#"><i class="fa fa-wheelchair-alt"></i> Wheelchair Accessible</a></li>
                                    
                                </ul>
                              </div>
                            </div>
                          </div>
                          
                          <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#opening_hours" aria-expanded="false" aria-controls="collapseThree"> <i class="fa fa-calendar-check-o"></i> Opening Hours</a>
                              </h4>
                            </div>
                            <div id="opening_hours" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
                                <ul>
                                	<li>
                                    	<span class="hours_title"><i class="fa fa-clock-o"></i>Monday</span> 
                                        <span>10:00am</span> - <span>11:00pm</span>
                                    </li>
                                    <li>
                                    	<span class="hours_title"><i class="fa fa-clock-o"></i>Tuesday</span> 
                                        <span>10:00am</span> - <span>11:00pm</span>
                                    </li>
                                    <li>
                                    	<span class="hours_title"><i class="fa fa-clock-o"></i>Wednesday</span> 
                                        <span>10:00am</span> - <span>11:00pm</span>
                                    </li>
                                    <li>
                                    	<span class="hours_title"><i class="fa fa-clock-o"></i>Thursday</span> 
                                        <span>10:00am</span> - <span>11:00pm</span>
                                    </li>
                                    <li>
                                    	<span class="hours_title"><i class="fa fa-clock-o"></i>Friday</span> 
                                        <span>10:00am</span> - <span>11:00pm</span>
                                    </li>
                                    <li>
                                    	<span class="hours_title"><i class="fa fa-clock-o"></i>Saturday</span> 
                                        <span>10:00am</span> - <span>11:00pm</span>
                                    </li>
                                    <li>
                                    	<span class="hours_title"><i class="fa fa-clock-o"></i>Sunday</span> 
                                        <span>10:00am</span> - <span>11:00pm</span>
                                    </li>
                                </ul>
                              </div>
                            </div>
                          </div>
						  
						  <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                              <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#events" aria-expanded="false" aria-controls="collapseThree"> <i class="fa fa-calendar"></i> Upcoming Events</a>
                              </h4>
                            </div>
                            <div id="events" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingThree">
                              <div class="panel-body">
							  <div class="row">
                                <div class="col-sm-6 event_listing">
							   <div class="listing-thumb">
								<a href="event-detail.html"><img src="assets/images/event1.jpg" height="200" width="300"></a>
								</div>
								<div class="event_right interest-icon">
								<a href="#" class="batn"title="interested"><i class="fa fa-star-o"></i></a>
								</div>
								<div class="js-grid-item-body event_body">
									<div class="event_calendar">
										<span class="event_month color-primary">September</span>
										<span class="event_date">30</span>
										<span class="event_year">2020</span>
									</div>
									<div class="event_content">
									<h2 class="event_title"><a href="event-detail.html">Healthcare Excellence</a></h2>
									<ul class="event_meta list-none">
									
									<li class="event_metaLis text-ellipsis">
									<span class="map_icon_thumb"><i class="fa fa-map-marker"></i><span>Brown Sugars, Jaipur</span></span></li>
									<li class="event_metaLis text-ellipsis"><span></span>
									</li>
									</ul>
									</div>
								</div>
								
								
								</div>
								
								 <div class="col-sm-6 event_listing">
							   <div class="listing-thumb">
								<a href="event-detail.html"><img src="images/fern5.jpg" height="200" width="300"></a>
								</div>
								<div class="event_right interest-icon">
								<a href="#" class="batn"title="interested"><i class="fa fa-star-o"></i></a>
								</div>
								<div class="js-grid-item-body event_body">
									<div class="event_calendar">
										<span class="event_month color-primary">December</span>
										<span class="event_date">31</span>
										<span class="event_year">2020</span>
									</div>
									<div class="event_content">
									<h2 class="event_title"><a href="event-detail.html">Birthday Celebration</a></h2>
									<ul class="event_meta list-none">
									
									<li class="event_metaLis text-ellipsis">
									<span class="map_icon_thumb"><i class="fa fa-map-marker"></i><span>Brown Sugars Jaipur</span></span></li>
									<li class="event_metaLis text-ellipsis"><span></span>
									</li>
									</ul>
									</div>
								</div>
								
								
								</div>
								
                              </div>
                            </div>
							</div>
                          </div>
						  
						  
                    </div>
                    
                     <!-- Listing-Map -->
                  <!--  <div id="single_map">
                        <div class="widget_title">
                             <h4>View Map</h4>
                        </div>
                        <div id="single_map_wrp">
                            hello
                            
      <div id="singlemap" data-latitude="26.8653" data-longitude="75.7887" data-map-icon="assets/images/category-icon2.png"></div>                             
                        </div>
                </div>
                
                -->
                
                
                
                    <!-- /Listing-Map -->
                
                
                
                    <!-- Review-List -->
                        <div class="reviews_list">
                            <div class="widget_title">
                                 <h4><span>2 Reviews for</span> Brown Sugars </h4>
                             </div>
                            <div class="review_wrap">
                                <div class="review_author">
                                    <img src="assets/images/94x94.jpg" alt="image">
                                    <figcaption>
                                        <h6>Riya Gurbani</h6>
                                    </figcaption>
                                </div>
                                <div class="review_detail">
                                    <h5>Good service and Location is great</h5>
                                    <p> Love the food worth the price! If coming to Jaipur one must hangout. </p>
                                    <div class="listing_rating">
                                        <p><span class="review_score">4.5/5</span> 
                                           <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                                           <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                                           (5 Reviews) </p>
                                        <p><i class="fa fa-clock-o"></i> April 11, 2017 8:52 am</p>  
                                    </div>
                                </div>
                            </div>
                            
                            <div class="review_wrap">
                                <div class="review_author">
                                    <img src="assets/images/94x94.jpg" alt="image">
                                    <figcaption>
                                        <h6>Abhay Sharma </h6>
                                    </figcaption>
                                </div>
                                <div class="review_detail">
                                    <h5>Good service and Location is great</h5>
                                    <div class="listing_rating">
                                        <p><span class="review_score">4.0/5</span> 
                                           <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                                           <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                                           (5 Reviews) </p>
                                        <p><i class="fa fa-clock-o"></i> April 11, 2017 8:52 am</p>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Review-List -->
                    
                
        
  
                    <!-- Review-Form -->
                    <div id="writereview" class="review_form">
                    	<div class="widget_title">
	                    	 <h4>Write a Review </h4>
                         </div>
						<form action="" method="post">
                        	<div class="form-group">
                            	<label class="form-label">Your Rating for this listing</label>
                                <div class="listing_rating">
                                    <input name="rate" id="rating-5" value="5" type="radio">
                                    <label for="rating-5" class="fa fa-star"></label>
                                     <input name="rate" id="rating-4" value="4" type="radio">
                                    <label for="rating-4" class="fa fa-star"></label>
                                   <input name="rate" id="rating-3" value="3" type="radio">
                                    <label for="rating-3" class="fa fa-star"></label>
                                    <input name="rate" id="rating-2" value="2" type="radio">
                                    <label for="rating-2" class="fa fa-star"></label>
 
                                    <input name="rate" id="rating-1" value="1" type="radio">
                                    <label for="rating-1" class="fa fa-star"></label>
                                    
                                    <input type="hidden" name="whatever3" class="rating-value" value="1" >

                                </div>
                                
                            </div>
                            <div class="form-group">
                            	<label class="form-label">Email</label>
                                <input name="email" type="email" placeholder="Your Email" class="form-control">
                            </div>
                            <div class="form-group">
                            	<label class="form-label">Title</label>
                                <input name="title" type="text" placeholder="Title of Your Review" class="form-control">
                            </div>
                            <div class="form-group">
                            	<label class="form-label">Review</label>
                                <textarea name="review" cols="" rows="" class="form-control" placeholder="Yout Experience"></textarea>
                            </div>
                            <div class="form-group">
                            	<input type="submit" class="btn" value="Submit Review" name="R_submit">
                            </div>
                        </form>
                    </div>
                    <!-- Review-Form -->
            	</div>
            </div>
        
            <!-- Sidebar -->
			 <div class="col-md-4">
            	<div class="ElemoListing_sidebar">
                	<div class="sidebar_wrap listing_action_btn">
                    	<ul>
                            <li><a data-toggle="modal" data-target="#share_modal"><i class="fa fa-share-alt"></i> Share This</a></li>
                            <li><a data-toggle="modal" data-target="#email_friends_modal"><i class="fa fa-envelope-o"></i>Email to Friends</a></li>
                            <li><a href="#writereview" class="js-target-scroll"> <i class="fa fa-star"></i> Write a Review</a></li>
                            <li><a data-toggle="modal" data-target="#report_modal"><i class="fa fa-exclamation-triangle"></i> Report</a></li>
                        </ul>
                    </div>
                	<div class="sidebar_wrap listing_contact_info">
                    	<div class="widget_title">
	                    	<h6>Contact Info</h6>
                        </div>
                    	<ul>
                        	<li><i class="fa fa-map-marker"></i> Champa Devi Tower, Nand Puri, Jaipur </li>
                            <li><i class="fa fa-phone"></i> <a href="tel:0141 4126622">0141 4126622</a></li>
                            <li><i class="fa fa-envelope"></i> <a href="info@brownsugarindia.com">rinfo@brownsugarindia.com</a></li>
                            <li><i class="fa fa-link"></i> <a href="https://www.brownsugarindia.com/">https://www.brownsugarindia.com/</a></li>
                        </ul>
                        <div class="social_links">
                        	<a href="#" class="facebook_link"><i class="fa fa-facebook-f"></i></a>
                        	<a href="#" class="linkedin_link"><i class="fa fa-linkedin"></i></a>
                        	<a href="#" class="twitter_link"><i class="fa fa-twitter"></i></a>
                        	<a href="#" class="google_plus_link"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    
                   <!-- <div class="sidebar_wrap">
                    	<div class="widget_title">
	                    	<h4>Watch Video</h4>
                        </div>
                    	<div class="listing_video">
                          <iframe class="mfp-iframe" src="https://www.youtube.com/embed/rqSoXtKMU3Q" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- /Sidebar -->
        </div>
    </div>
</section>
<!-- /Listings -->

<!-- Similar-Listings -->
<section id="similar_listings" class="section-padding gray_bg">
	<div class="container">
		<div class="section-header text-center">
            <h2>Similar Listings </h2>
        </div>
        <div class="row">
            <div class="col-md-4 show_listing grid_col">
                <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon2.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="http://www.tapri.net/"><img src="images/tapri.jpg" alt="image" height="400" width="700"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Cafe</a>
                        </div>
                        <h4><a href="http://www.tapri.net/">Tapri The Tea House </a></h4>
                    
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Jaipur</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 show_listing grid_col">
                <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon2.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="https://www.google.com/search?q=oth%20jaipur&source=lmns&bih=607&biw=1364&hl=en&sa=X&ved=2ahUKEwjP0M6lrubrAhWdzzgGHcOeBFsQvS4wAHoECAsQOA&npsic=0&rflfq=1&rlha=0&rllag=26877368,75798346,3128&tbm=lcl&rldimm=10866123031082923333&lqi=CgpvdGggamFpcHVySJPm7IuMq4CACFoXCgNvdGgQABgAGAEiCm90aCBqYWlwdXI&phdesc=2Luhb9qUO-c&rldoc=1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u5!2m2!5m1!1sgcid_3italian_1restaurant!1m4!1u5!2m2!5m1!1sgcid_3pizza_1restaurant!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e5!2m1!1e3!3sIAEqAklO,lf:1,lf_ui:9&rlst=f#rlfi=hd:;si:10866123031082923333,l,CgpvdGggamFpcHVySJPm7IuMq4CACFoXCgNvdGgQABgAGAEiCm90aCBqYWlwdXI,y,2Luhb9qUO-c;mv:[[26.9086642,75.8026313],[26.8460726,75.794061]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u5!2m2!5m1!1sgcid_3italian_1restaurant!1m4!1u5!2m2!5m1!1sgcid_3pizza_1restaurant!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e5!2m1!1e3!3sIAEqAklO,lf:1,lf_ui:9"><img src="images/bella.jpg" alt="image" height="400" width="700"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Cafe </a>
                        </div>
                        <h4><a href="https://www.google.com/search?q=oth%20jaipur&source=lmns&bih=607&biw=1364&hl=en&sa=X&ved=2ahUKEwjP0M6lrubrAhWdzzgGHcOeBFsQvS4wAHoECAsQOA&npsic=0&rflfq=1&rlha=0&rllag=26877368,75798346,3128&tbm=lcl&rldimm=10866123031082923333&lqi=CgpvdGggamFpcHVySJPm7IuMq4CACFoXCgNvdGgQABgAGAEiCm90aCBqYWlwdXI&phdesc=2Luhb9qUO-c&rldoc=1&tbs=lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u5!2m2!5m1!1sgcid_3italian_1restaurant!1m4!1u5!2m2!5m1!1sgcid_3pizza_1restaurant!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e5!2m1!1e3!3sIAEqAklO,lf:1,lf_ui:9&rlst=f#rlfi=hd:;si:10866123031082923333,l,CgpvdGggamFpcHVySJPm7IuMq4CACFoXCgNvdGgQABgAGAEiCm90aCBqYWlwdXI,y,2Luhb9qUO-c;mv:[[26.9086642,75.8026313],[26.8460726,75.794061]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u5!2m2!5m1!1sgcid_3italian_1restaurant!1m4!1u5!2m2!5m1!1sgcid_3pizza_1restaurant!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e5!2m1!1e3!3sIAEqAklO,lf:1,lf_ui:9">On the House </a></h4>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i>Jaipur</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 show_listing grid_col">
                <div class="listing_wrap">
                    <div class="listing_img">
                        <span class="like_post"><i class="fa fa-bookmark-o"></i></span>
                        <div class="listing_cate">
                            <span class="cate_icon"><a href="#"><img src="assets/images/category-icon2.png" alt="icon-img"></a></span> 
                            <span class="listing_like"><a href="#"><i class="fa fa-heart-o"></i></a></span>
                        </div>
                        <a href="http://www.hotellasvegasjaipur.com/bae.html"><img src="images/bae.jpg" alt="image" height="400" width="700"></a>
                    </div>
                    <div class="listing_info">
                        <div class="post_category">
                            <a href="#">Hotel</a>
                        </div>
                        <h4><a href="http://www.hotellasvegasjaipur.com/bae.html">Cafe Bae</a></h4>
                        <p>5-star hotel with restaurant, Deluxe Rooms.</p>
                        
                        <div class="listing_review_info">
                            <p><span class="review_score">4.0/5</span> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> <i class="fa fa-star active"></i> 
                               <i class="fa fa-star active"></i> <i class="fa fa-star"></i> 
                               (5 Reviews) </p>
                            <p class="listing_map_m"><i class="fa fa-map-marker"></i> Jaipur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Similar-Listings -->

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
        
    <!--   <div class="footer_widgets">
            <div class="footer_nav">
                <ul>
                    <li><a href="how-it-work.html">How it Work</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="blog-grid-style.html">Blog</a></li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & condition</a></li>
                </ul>
            </div>
        </div> -->
        
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

<!-- Share-Listing -->
<div id="share_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title">Share Listing</h3>
      </div>
      <div class="modal-body">
      	<div class="share_listing">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /Share-Listing -->

<!-- Email-to-Friends -->
<div id="email_friends_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title">Email to Friend</h3>
      </div>
      <div class="modal-body">
        <form action="#" method="get">
          <div class="form-group">
            <input class="form-control" placeholder="Your Name" type="text">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Your Email Address" type="email">
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Friend Email Address" type="email">
          </div>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input value="Submit" class="btn btn-block" type="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Email-to-Friends -->

<!-- Report -->
<div id="report_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title">Report This Listing</h3>
        <p>Please indicate what problem has been found!</p>
      </div>
      <div class="modal-body">
        <form action="#" method="get">
          <div class="form-group">
            <div class="radio">
                <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_0" checked>
                <label for="RadioGroup1_0">Duplicate Listing</label>
             </div>
             <div class="radio">
                <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_1">
                <label for="RadioGroup1_1">Wrong Contact Info </label>
             </div>
             <div class="radio">
                <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2">
                <label for="RadioGroup1_2">Fake Listing</label>
             </div>
             <div class="radio">
                <input type="radio" name="RadioGroup1" value="radio" id="RadioGroup1_2">
                <label for="RadioGroup1_2">Other Problem</label>
             </div>
          </div>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Problem Description"></textarea>
          </div>
          <div class="form-group">
            <input value="Submit" class="btn btn-block" type="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Report -->

<!-- Send-Message -->
<div id="message_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h3 class="modal-title">Send Message</h3>
      </div>
      <div class="modal-body">
        <form action="#" method="get">
          <div class="form-group">
          	<input type="text" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
          	<input type="email" class="form-control" placeholder="Email">
          </div>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input value="Send Message" class="btn btn-block" type="submit">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /Send-Message -->

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<!--Carousel-JS--> 
<script src="assets/js/owl.carousel.min.js"></script>
<!--Map-JS--> 
    <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDmFqQa3GmRdYRtITKJnv3qF3-tsL5H2A&callback=loadMap">
</script>
    <script type ="text/javascript" src="js/googlemap.js"></script>
    
<!-- <script src="js/googlemap.js"></script>
 <script src="assets/js/maps.js"></script> -->
<script src="assets/js/interface.js"></script> 


</body>    
</html>