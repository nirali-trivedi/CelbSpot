<?php 

	include('connect.php');
?>
<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8"/>
<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width"/>
<title>Studio Francesca - Premium Theme by WowThemes.net</title>
<!-- Included CSS Files-->
<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/nivoslider.css"><!-- nivo slider stylesheet -->
<link rel="stylesheet" href="stylesheets/skins/green.css"><!-- skin color -->
<link rel="stylesheet" href="stylesheets/responsive.css">
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
<!-- HIDDEN PANEL 
================================================== -->
<div id="panel">
	<div class="row">
		<div class="twelve columns">
			<img src="images/info.png" class="pics" alt="info">
			<div class="infotext">
				 Thank you for visiting my theme! Replace this with your message to visitors.
			</div>
		</div>
	</div>
</div>
<p class="slide">
	<a href="#" class="btn-slide"></a>
</p>
<!-- HEADER
================================================== -->
<div class="row">	
		<div class="four columns">
			<div class="logo">
				<a href="index.html">
				<img src="images/Celebration venue/logo.png" width="180px" style="margin-top:-10px" height="28px">
				</a>			</div>
		</div>
		<div class="eight columns noleftmarg">		
			<nav id="nav-wrap">
				<ul class="nav-bar sf-menu">
				
					<li class="current">
					<a href="index.html">Home</a>
						<!--<ul>
												
						<li><a href="index2.html">Without slider</a></li>						
						</ul>-->
					</li>
					
					<li>
					<a href="portofolio2.html">Gallery</a>
						<!--<ul>
						<li><a href="portofolio2.html">Party Plot</a></li>
						<li><a href="portofolio2.html">Banquet</a></li>
						<li><a href="portofolio2.html">Community Hall</a></li>						
						<!--<li><a href="portofoliodetail.html">Project Details</a></li>
						</ul>-->
					</li>
					
					<!--<li>
					<a href="#">Blog</a>
						<ul>
						<li><a href="blogpage1.html">Blog page style 1</a></li>
						<li><a href="blogpage2.html">Blog page style 2</a></li>
						<li><a href="blogpage3.html">Blog page style 3</a></li>
						<li><a href="blogsinglepost.html">Single post</a></li>
						</ul>
					</li>-->
					
					<li>
					<a href="#">Pages</a>
						<ul>
						<li><a href="about.html">About us</a></li>
						<li><a href="services.html">Services</a></li>						
						</ul>
					</li>
					
					<!--<li>
					<a href="#">Features</a>
						<ul>
						<li><a href="columns.html">Columns</a></li>
						<li><a href="elements.html">Elements</a></li>
						<li><a href="typography.html">Typography</a></li>
						</ul>
					</li>-->
					
					<li>
					<a href="contact.html">Contact</a>
					</li>
				</ul>
		  </nav>
		</div>	
</div>
<div class="clear">
</div>
<!-- SUBHEADER
================================================== -->
<div id="subheader">
	<div class="row">
		<div class="twelve columns">
			<p class="left">
				 PROFILE
			</p>
			<!--<p class="right">
				<a href="portofolio2.html">View more projects</a>
			</p>-->
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
	<!-- PROJECT DESCRIPTION-->
	<div class="six columns">
		<div class="sectiontitle">
			<h4>Epitome Restaurant/Banquet</h4>
		</div>
		<p>
			The finest multi-cuisine dinning experience in Ahmedabad. We are committed to bring the divided culture of food from the different 									
			regions of the world of the modern lavish interior and the delicious food attracts our guests and makes their experience so pleasure 
			and unforgettable.
		</p>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<dl class="tabs">
			<dd class="active"><a href="#simple1">About</a></dd>
			<dd><a href="#simple2">Up Coming offers</a></dd>
			<dd><a href="#simple3">Contact Details</a></dd>
		</dl>
	<ul class="tabs-content">
		<li class="active" id="simple1Tab">
			<p>
				<b>Epitome Banquet</b> has set the highest standards since its establishment. We provide our customers with a large and elegant 
				enue where they may celebrate all their occasions effortlessly and in style.
 
				Our Banquet is an ideal venue for all types of Wedding, Reception, Birthday Parties, Ring Ceremony, conferences and meetings and 
				fulfils the requirements of a wide range of businesses and commercial organizations. Our well adorn modern lavish interior and 
				wide space makes the ambience very comfortable for you precious guest and makes your event cherished.
 
				The auspicious occasion can be arranged with warm and comfortable atmosphere for <B>up to 1000 guests</B>. We offer the most 	
				appropriate space, amenities, and mouth watering Indian and Continental cuisines.
			</p>
		</li>
		<li id="simple2Tab">
			<p>
				<b>Address :-</b> 102, Kansas Complex, Ghodasar Cross Road, Nr. Smruthi Mandir, Nr. Cadila Bridge, Ahmedabad - 380050
				<br>
				<b>Phone :-</b> 079- 25830013 ; 25830016
				<br>
				<b>Mobile :-</b> 09825060762
				<br>
				<b>Website/E-mail :-</b> class@epitomerestaurant.com
										 www.epitomerestaurant.com
 
			</p>
		</li>
		<li id="simple3Tab">
		<form action="" method="post">
			<table>
			
				<?php 
				
					$cid=$_GET["id"];

					$q="select * from demo where id='$cid'";
					$ql=mysql_query($q) or die(mysql_error());
					while($fetch=mysql_fetch_array($ql))
				{
				?>
				<tr><td>ID :- <?php echo $fetch['id'];?></td></tr>
				<tr><td width="1000">Service Provider's Name :- <?php echo $fetch['name'];?></td></tr>
				<tr><td>Website/E-mail :- <?php echo $fetch['email'];?></td></tr>
				<tr><td>Name of Banquet/Hall :- <?php echo $fetch['spot'];?></td></tr>
				<tr><td>Address :- <?php echo $fetch['ad'];?></td></tr>
				<tr><td>Area :- <?php echo $fetch['area'];?></td></tr>
				<tr><td>Phone Number(LL) :- <?php echo $fetch['ll'];?></td></tr>
				<tr><td>Mobile Number :- <?php echo $fetch['mobile'];?></td></tr> 
				<tr><td><a href="edit.php?eid=<?php echo $fetch['id'];?>">Edit</a></td></tr>
				
			<?php } ?>
				
		
			</table>
		</form>
			<!--<p class="setting"><span>Website/E-mail Address<A href="#"><img src="images/profile images/edit.png" alt="*Edit*"></A></span></p>
   			<p class="setting"><span>Phone Number<a href="#"><img src="images/profile images/edit.png" alt="*Edit*"></a></span></p>
    		<p class="setting"><span>Mobile number<a href="#"><img src="images/profile images/edit.png" alt="*Edit*"></a></span></p>
    		<p class="setting"><span>Address<a href="#"><img src="images/profile images/edit.png" alt="*Edit*"></a></span></p>
    		<p class="setting"><span>Name<a href="#"><img src="images/profile images/edit.png" alt="*Edit*"></a></span> </p>-->
		</li>
	</ul>
</div>
	<!-- end main content-->
	<!-- SLIDER-->
	<div class="six columns">
		<div class="slider-wrapper theme-default">
			<div id="slider" class="nivoSlider detailslider">
				<img src="images/profile images/bgimg.jpg" data-thumb="" alt=""/>
				<img src="images/profile images/img-z-8.jpg" data-thumb="" alt=""/>
			</div>
		</div>
	</div>
	<!-- end sliderr-->
</div>
<div class="hr">
</div>
<!-- FOOOTER 
================================================== -->
<div id="footer">
	<footer class="row">
	<p class="back-top floatright">
		<a href="#top"><span></span></a>
	</p>
	<div class="four columns">
		<h1>ABOUT US</h1>
		 Our goal is to keep clients satisfied!
	</div>
	<div class="four columns">
		<h1>GET SOCIAL</h1>
		<div class="social facebook">
			<a href="#"></a>
		</div>
		<div class="social twitter">
			<a href="#"></a>
		</div>
		<div class="social deviantart">
			<a href="#"></a>
		</div>
		<div class="social flickr">
			<a href="#"></a>
		</div>
		<div class="social dribbble">
			<a href="#"></a>
		</div>
	</div>
	<div class="four columns">
		<h1 class="newsmargin">NEWSLETTER</h1>
		<div class="row collapse newsletter floatright">
			<div class="ten mobile-three columns">
				<input type="text" class="nomargin" placeholder="Enter your e-mail address...">
			</div>
			<div class="two mobile-one columns">
				<a href="#" class="postfix button expand">GO</a>
			</div>
		</div>
	</div>
	</footer>
</div>
<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>
<script src="javascripts/jquery.nivo.slider.pack.js"></script>
<script src="javascripts/jquery.cycle.js"></script>
<script src="javascripts/app.js"></script>
<script src="javascripts/modernizr.foundation.js"></script>
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/scrolltotop.js"></script>
<script src="javascripts/hoverIntent.js"></script>
<script src="javascripts/superfish.js"></script>
<script src="javascripts/responsivemenu.js"></script>
<script src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/twitterusername.js"></script>
</body>
</html>