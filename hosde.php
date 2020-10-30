<?php 
include("config.php");
?>
<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 06:28:24 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Dashboard</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css">
<link rel="stylesheet" href="assets/css/dashboard.css" type="text/css">
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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"> 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->  
</head>
<body>
<div class="dashboard_container">
	<!-- Header -->
	<header id="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
               <div class="navbar-header">
                <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="image"/></a> </div>
                <div id="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i></div>
              </div>
                <div class="collapse navbar-collapse" id="">
                    <div class="user_nav ml-auto">
                        <div class="dropdown">
                          <span id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="assets/images/happy-client-01.jpg" alt="img"> 
                          </span>
                          <ul class="dropdown-menu" aria-labelledby="dLabel">
                            <li><a href="dashboard.html"><i class="fa fa-cogs"></i> Dashboard</a></li>
                            <li><a href="dashboard-my-profile.html"><i class="fa fa-user-o"></i> My Profile</a></li>
                            <li><a href="index.html"><i class="fa fa-power-off"></i> Logout</a></li>                   
                          </ul>
                        </div>
                    </div>
                    <div class="submit_listing">
                        <a href="dashboard-add-listing.html" class="btn outline-btn"><i class="fa  fa-plus-circle"></i> Submit</a>
                     </div>
                </div>
             </div>   
        </nav>
    </header>
	<!-- /Header -->

	<div id="dashboard">
	<!-- Navigation -->
	<div id="dashboard-nav" class="dashboard-nav">	
		<ul>
        	<li class="active"><a href="dashboard.html"><i class="fa fa-cogs"></i> Dashboard</a></li>
			<li><a data-toggle="dropdown"><i class="fa fa-th-list"></i> My Listings</a>
				<ul class="dropdown-menu" aria-labelledby="MLabel">
					<li><a href="#">Active <span class="nav-tag green">6</span></a></li>
					<li><a href="#">Pending <span class="nav-tag yellow">1</span></a></li>
					<li><a href="#">Expired <span class="nav-tag red">2</span></a></li>
				</ul>	
			</li>
			<li><a href="#"><i class="fa fa-star-o"></i> Reviews</a></li>
			<li><a href="#l"><i class="fa fa-bookmark-o"></i> Bookmarks</a></li>
			<li><a data-toggle="dropdown"><i class="fa fa-th-list"></i> My Events</a>
				<ul class="dropdown-menu" aria-labelledby="MLabel">
					<li><a href="#">Active <span class="nav-tag green">6</span></a></li>
					<li><a href="#">Add Event</a></li>
				</ul>	
			</li>
			<li><a href="dashboard-add-listing.html"><i class="fa fa-plus"></i> Add Listing</a></li>
            <li><a href="dashboard-my-profile.html"><i class="fa fa-user-o"></i> My Profile</a></li>
			<li><a href="index.html"><i class="fa fa-power-off"></i> Logout</a></li>
		</ul>	
	</div>
	<!-- Navigation / End -->

	<!-- Content -->
	<div class="dashboard-content">
		<!-- Titlebar -->
		<div id="titlebar">
			<div class="row">
				<div class="col-md-12">
					<h2>Add New Listing</h2>
					<!-- Breadcrumbs -->
					<nav id="breadcrumbs">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="#">Dashboard</a></li>
							<li>Add New Listing</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
        
        <div class="row">
			
			<!-- Listings -->
			<div class="col-lg-12 col-md-12">
					<form action="" method="post" enctype="multipart/form-data">
                    	<div class="add_listing_info">
                            <h3>Basic Informations</h3>	
                           <!--   <div class="form-group">
                                <label class="label-title">Category</label>
                                <div class="select">
                                    <select class="form-control" name="category">
                                        <option>Hospital</option>
                                        <option>Restaurant</option>
                                        <option>Shopping  </option>
                                        <option>Hotels </option>
                                        <option>Theater </option>
                                        <option>Tourist Places </option>
                                        <option>Rental Vehical </option>
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group">
                                    <label class="label-title">ID </label>
                                    <input type="text" class="form-control" name="id">
                                </div>
                            <div class="form-group">
                                    <label class="label-title">Name </label>
                                    <input type="text" class="form-control" name="nm">
                                </div>
                                            
                        </div> 
                        
                        <div class="add_listing_info">
                            <h3>Contact Info</h3>				
                            <div class="form-group">
                                <label class="label-title">Address</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                       <!--     <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="label-title">City</label>
                                    <div class="select">
                                        <select class="form-control" name="city">
                                            <option>Jaipur</option>
                                            <option>Bangalore</option>
                                            <option>Mumbai</option>
                                           
                                        </select>
                                     </div>   
                                </div> 
                                <div class="form-group col-sm-6">
                                    <label class="label-title">State</label>
                                    <div class="select">
                                        <select class="form-control" name="state">
                                            <option>Rajasthan</option>
                                            <option>Kanartaka</option>
                                            <option>Maharashtra</option>
                                            
                                        </select>
                                    </div>
                                </div> -->
                            </div>
                        
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label class="label-title">Zip-Code</label>
                                    <input type="text" class="form-control" name="zipcode">
                                </div>  
                                <div class="form-group col-sm-6">
                                    <label class="label-title">Phone Number</label>
                                    <input type="text" class="form-control" name="phone">
                                </div>  
                            </div>
                            <div class="column">
	                            <div class="form-group col-sm-6">
                                    <label class="label-title">Website</label>
                                    <input type="text" class="form-control" name="url">
                                </div> 
                            </div>
                         
                        <div class="add_listing_info">
                            <h3>Add Pricing</h3>	
                            <div class="row">			
                                <div class="form-group col-sm-6">
                                    <label class="label-title">Min. Price</label>
                                    <input type="text" class="form-control" name="min">
                                </div>  
                                <div class="form-group col-sm-6">
                                    <label class="label-title">Max Price</label>
                                    <input type="text" class="form-control" name="max">
                                </div>  
                                 <div class="form-group col-sm-6">
                                    <label class="label-title"> Rating </label>
                                    <input type="text" class="form-control" name="rating">
                                </div>  
                            </div>
                                     
                        </div>   
                        
                        <div class="add_listing_info">
                            <h3>Add Gallery Images</h3>				
                            <div class="form-group">
                                <input type="file" name="image">
                            </div>  
                        </div>
                    
                        <div class="add_listing_info">
                            <input type="submit" value="Submit Listing" class="btn" name="details">
                        </div>  
                        </div>
          
                    </form>
			</div>
    <?php 
            
  if(isset($_POST['details']))
{
   $id = $_POST['id'];
    $name = $_POST['nm'];
    $address = $_POST['address'];
     $zipcode = $_POST['zipcode'];
     $phone = $_POST['phone'];
     $url = $_POST['url'];
     $min = $_POST['min'];
     $max = $_POST['max'];
      $rating = $_POST['rating'];
      $image = $_FILES["image"]['name'];
      
      if(file_exists("images/".basename($_FILES["image"]["name"])))
    {
        $store = $_FILES["image"]['name'];
        $_SESSION['status'] = "Image Already Exists.  '.$store.'";
       // header('Location: hosde.php');
        
    }
    else {
    $sql = "INSERT INTO hospital(h_id,h_name,h_address,h_pincode,url,rating,Image) VALUES ('$id','$name','$address','$zipcode','$phone','$url','$min','$max','$rating','$image')";
       // $query_run = mysqli_query($con,$query);
    //if($query_run)
        if ($con->query($sql) === TRUE)
    {
        move_uploaded_file($_FILES["image"]["temp_name"],"images/",$_FILES["image"]["name"]);
        $_SESSION['success'] = "Mall Added";
            ?>
    <script>
  alert("New record created successfully");
        </script>
    <?php 
        //header('Location: add.php');
    }
    else
    {
        $_SESSION['success'] = "MAll Not Added";
        echo "Error: " . $sql . "<br>" . $con->error;
       // header('Location: add.php');
    }
    }
}   
    
                
   /* $sql = "INSERT INTO malls(mall_name,mall_address,mall_id,mall_url,City,State,Zipcode,Phone,Min,Max) VALUES ('$nm','$address','$id','$url','$city','$state','$zipcode','$phone','$min','$max')";
   // $sql_run = mysqli_query($con,$sql);
      
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
    header("Refresh: 5; url=add.php"); 
  }/*           if($sql_run)
                {
                    echo ' <script type="text/javascript"> alert("Data Saved") </script> ';
                }
                else
                {
                     echo ' <script type="text/javascript"> alert("not Data Saved") </script> ';
              
                }
                
            }*/  
  ?>          
            
            
			<!-- Copyrights -->
			<div class="col-md-12">
				<div class="copyrights">Copyright &copy; 2020 Location-Advisory. All Rights Reserved</div>
			</div>
		</div>
        
	</div>
	<!-- Content / End -->
</div>
</div>

<!-- Scripts --> 
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/interface.js"></script> 
<!--Carousel-JS--> 
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/Elemo/dashboard-add-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Aug 2020 06:28:24 GMT -->
</html>