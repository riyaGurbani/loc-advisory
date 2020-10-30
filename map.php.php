<? php
    session_start();
    
    
    ?>

<html>
<head>
<title> API </title>
<link rel ="stylesheet" href="css/bootstap.min.css">
<script type ="text/javascript" src="js/googlemap.js"></script>
<style type="text/css">
.container {
height: 450px;
}
#map {
width: 100%;
height: 100%;
border:1px solid blue;
}
</style>
</head>
<body>
<div class="container">
<div id="map"></div>
</div>
</body>
<script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDmFqQa3GmRdYRtITKJnv3qF3-tsL5H2A&callback=loadMap">
</script>
</html>
 

<!-- AIzaSyCXkfffbuLS2MPy08j4Z3c_vZJAiznAKBA -->