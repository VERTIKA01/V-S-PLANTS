<?php
$servername='localhost';
$username='root';
$password='';
$dbname='vertu';
$conn=mysqli_connect($servername,$username,$password,$dbname);

$name='';
$email='';
$message='';

if(isset($_POST['create'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mess=$_POST['comment'];
	$query="INSERT INTO plants VALUES(?,?,?)";
	$stmt=mysqli_prepare($conn,$query); 
	mysqli_stmt_bind_param($stmt,'sss',$name,$email,$mess);
	mysqli_stmt_execute($stmt);
    if(mysqli_affected_rows($conn)>0){
    	echo '<script>alert("SENT SUCCESSFULLY")</script>';
    }
    else{
    	echo '<script>alert("NOT SENT")</script>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>V'S PLANTS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-Bistro=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li> 
						<li><a href="about.html">About Us</a></li>
						<li><a href="services.html">Services</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                       <!-- <li><a href="pricing.html">Pricing</a></li>-->
                        <li class="active"><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
	<div class="row">
								<div class="col-md-6">
									<p>YOU CAN SOLVE YOUR ISSUE BY SENDING THE MESSAGE </p>
									<div class="done">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				Your message has been sent. Thank you!
			</div>
		</div>
									<div class="contact-form">
											
		<form method="post" action="" id="contactform" class="contact">
											<div class="form-group has-feedback">
												<label for="name">Name*</label>
												<input type="text" class="form-control" name="name" placeholder="">
												<i class="fa fa-user form-control-feedback"></i>
											</div>
											<div class="form-group has-feedback">
												<label for="email" >Email*</label>
												<input type="email" class="form-control" name="email" placeholder="">
												<i class="fa fa-envelope form-control-feedback"></i>
											</div>
 
											<div class="form-group has-feedback">
												<label for="message">Message*</label>
												<textarea class="form-control" rows="6" name="comment" placeholder=""></textarea>
												<i class="fa fa-pencil form-control-feedback"></i>
											</div>
											<input type="submit" name='create' value="Submit" id="submit" class="submit btn btn-default">
										</form>
										 
										
									</div>
								</div>
								<div class="col-md-6">
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.trivoo.net" id="get-map-data">trivoo</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>-->
<img src="1.jfif">
								</div>
							</div>
	</div>
 
	</section>
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>V'S PLANTS</strong><br>
					AK MUKHERJEE ROAD PALPPARA<br>
					 PIN:-700090 WEST BENGAL KOLKATA
					</address>
					<p>
						<i class="icon-phone"></i>+91 9804147263 <br>
						<i class="icon-envelope-alt"></i>
						singhvertika123@gmail.com 
					</p>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="#">Latest Events</a></li>
						<li><a href="#">Terms and conditions</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="#">Career</a></li>
						<li><a href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest flowers</h5>
					<ul class="link-list">
						<li><a href="#"></a>Petunia</li>
						<li><a href="#"></a>Petunia is genus of 20 species of flowering plants of South American origin.</li>
						<li><a href="#">WINTER FLOWER</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3">
					<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a href="#">WINTER FLOWERS ARE HEREE!!</a></li>
						<li><a href="#">SALEEEE ALERT</a></li>
						<li><a href="#">PRICE DROPPED UPTO 20%</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Bistro Restaurant 2015 All right reserved. By </span><a href="http://webthemez.com" Bistro="_blank">WebThemez</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>-->
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script> 
<script src="js/portfolio/jquery.quicksand.js"></script>
<script src="js/portfolio/setting.js"></script>
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<script src="js/custom.js"></script>
<script src="js/validate.js"></script>
</body>
</html>