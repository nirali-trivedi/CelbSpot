<?php
	include('connect.php');
	//$a=array(1,2,3);
	$query = mysql_query("select * from trailsp where NsId = '3'");
	$sql = mysql_fetch_array($query);
	//$q="select * from trailsp where id = 1";
	//$query = mysql_query("select * from trailsp where NsId = $a");
	//print_r($sql); 
	/*while($sql = mysql_fetch_array($query))
	{}
	for($i=0;$i<count($a);$i++)
	{
	
	 print_r($sql[i]); exit;
	}*/
?>
<!DOCTYPE html>

<html class="no-js" lang="en">

<head>
<meta charset="utf-8"/>

<meta name="viewport" content="width=device-width"/>
<title>Celebration Spot</title>

<link rel="stylesheet" href="stylesheets/style.css">
<link rel="stylesheet" href="stylesheets/blog.css"><!-- blog stylesheet -->
<link rel="stylesheet" href="stylesheets/skins/teal.css"><!-- skin color -->
<link rel="stylesheet" href="stylesheets/responsive.css">
<!-- IE Fix for HTML5 Tags -->
<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->    
  <style type="text/css">
  	a
{
    text-decoration: none;
    color: white;
}
#bt
{
    padding:5px;
    background-color:#31b2c3; /* #DD4B39;*/
    border: 1px solid #666;
    border-radius: 5px;
    color:#FFF;
    text-decoration:none;
}


  </style>
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
				<a href="index.html"><h4>Celebration Spot</h4></a>
			</div>
		</div>
		<div class="eight columns noleftmarg">		
			<nav id="nav-wrap">
				<ul class="nav-bar sf-menu">
				
					<li class="current">
					<a href="index.html">Home</a>
						<ul>
												
						<li><a href="index2.html">Without slider</a></li>						
						</ul>
					</li>
					
					<li>
					<a href="#">Portofolio</a>
						<ul>
						<li><a href="portofolio2.html">2 Columns</a></li>
						<li><a href="portofolio3.html">3 Columns</a></li>
						<li><a href="portofolio4.html">4 Columns</a></li>						
						<li><a href="portofoliodetail.html">Project Details</a></li>
						</ul>
					</li>
					
					<li>
					<a href="#">Blog</a>
						<ul>
						<li><a href="blogpage1.html">Blog page style 1</a></li>
						<li><a href="blogpage2.html">Blog page style 2</a></li>
						<li><a href="blogpage3.html">Blog page style 3</a></li>
						<li><a href="blogsinglepost.html">Single post</a></li>
						</ul>
					</li>
					
					<li>
					<a href="#">Pages</a>
						<ul>
						<li><a href="about.html">About us</a></li>
						<li><a href="services.html">Services</a></li>						
						</ul>
					</li>
					
					<li>
					<a href="#">Features</a>
						<ul>
						<li><a href="columns.html">Columns</a></li>
						<li><a href="elements.html">Elements</a></li>
						<li><a href="typography.html">Typography</a></li>
						</ul>
					</li>
					
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
		<div class="eight columns">
			<p class="bread leftalign">
				 Results <!--<a href="index.html"> Home</a> / <a href="blogpage2.html">Blog second style</a>-->
			</p>
		</div>
		<div class="four columns">
			<div class="row collapse">
				<div class="ten mobile-three columns">
					<input type="text" class="nomargin" placeholder="Search...">
				</div>
				<div class="two mobile-one columns">
					<a href="#" class="postfix button expand">Go</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- CONTENT 
================================================== -->
<div class="row">
	<div class="twelve columns noleftmargin">
	    <!-- MAIN CONTENT -->
		<div class="eight columns noleftmargin">
			<div class="six columns">
				<div class="boxblog">
					<p><img src="images/temp/nivo3.jpg" alt="" class="thumb">
					<h5><?php echo $sql['sName']; ?></h5>
					</p>
					<p class="small date">
						<?php echo $sql['nConatctNo']; ?>
						<!--Conatct No: +91 9825263959  <span class="has-tip tip-top" data-width="90" title="6 comments"> --><a href="#"><img src="images/map_locator.jpg" alt="" style="width:30px; height:25px"></a></span>
					</p>
					<p class="small date">
						Ratings: <!--  <span class="has-tip tip-top" data-width="90" title="6 comments"></span> -->
					</p>
					<p class="small date">
						<b>Discription : </b>
						<?php echo $sql['sDiscription']; ?>
						<!--The finest multi-cuisine dinning experience in Ahmedabad. We are committed to bring the divided culture of food .. <!-- from the different regions of the world of the modern lavish interior and the delicious food attracts our guests and makes their experience so pleasure and unforgettable. -->
						
					</p>
					<p class="">
						<button id="bt"><a href="#" class="topopup">Booking</a></button>
						<a href="#" class="small continue">Continue reading..</a>
						<!-- Booking <span class="has-tip tip-top" data-width="90" title="6 comments"></span> -->
					</p>
					<!--<p>
						<img src="images/temp/nivo3.jpg" alt="" class="thumb">"ARE you comin' to the dawncin', Lady Speedway?" asked the American in his best transatlantic liner accent. "Most decidedly not!" Mind you, this answer from Lady Speedway meant red lights ahead. At the Hotel Biscuit...
					</p>
					<p>
						<a href="#" class="small continue">Continue reading</a>
					</p>-->
				</div>
			</div>
			</div>
			</div>
			</div>

			<!--<div class="six columns">
				<div class="boxblog">
					<h5> Field Marshal</h5>
					<p class="small date">
						Posted on: 3 Oct 2013 <span class="has-tip tip-top" data-width="90" title="6 comments"><img src="images/comments.png" alt=""></span>
					</p>
					<p>
						<img src="images/temp/folio3.jpg" alt="" class="thumb"> She was the Field Marshal of the Front Porch Knitting Needle Hussars, nicknamed "Hussies." Her approbation was olive oil; her discountenance prickly heat. "Of course," she added, "while recognizing that expatiation does not include brevity ...
					</p>
					<p>
						<a href="#" class="small continue">Continue reading</a>
					</p>
				</div>
			</div>
			<div class="six columns">
				<div class="boxblog">
					<h5>Lady Speedway</h5>
					<p class="small date">
						Posted on: 2 Oct 2013 <span class="has-tip tip-top" data-width="90" title="6 comments"><img src="images/comments.png" alt=""></span>
					</p>
					<p>
						<img src="images/temp/folio4.jpg" alt="" class="thumb">"ARE you comin' to the dawncin', Lady Speedway?" asked the American in his best transatlantic liner accent. "Most decidedly not!" Mind you, this answer from Lady Speedway meant red lights ahead. At the Hotel Biscuit ...
					</p>
					<p>
						<a href="#" class="small continue">Continue reading</a>
					</p>
				</div>
			</div>
			<div class="six columns">
				<div class="boxblog">
					<h5>Hotel Biscuit</h5>
					<p class="small date">
						Posted on: 3 Oct 2013 <span class="has-tip tip-top" data-width="90" title="6 comments"><img src="images/comments.png" alt=""></span>
					</p>
					<p>
						<img src="images/temp/folio6.jpg" alt="" class="thumb"> She was the Field Marshal of the Front Porch Knitting Needle Hussars, nicknamed "Hussies." Her approbation was olive oil; her discountenance prickly heat. "Of course," she added, "while recognizing that expatiation does not include brevity ...
					</p>
					<p>
						<a href="#" class="small continue">Continue reading</a>
					</p>
				</div>
			</div>
			<div class="six columns">
				<div class="boxblog">
					<h5>Private Theater</h5>
					<p class="small date">
						Posted on: 2 Oct 2013 <span class="has-tip tip-top" data-width="90" title="6 comments"><img src="images/comments.png" alt=""></span>
					</p>
					<p>
						<img src="images/temp/folio3.jpg" alt="" class="thumb">"ARE you comin' to the dawncin', Lady Speedway?" asked the American in his best transatlantic liner accent. "Most decidedly not!" Mind you, this answer from Lady Speedway meant red lights ahead. At the Hotel Biscuit ...
					</p>
					<p>
						<a href="#" class="small continue">Continue reading</a>
					</p>
				</div>
			</div>
			<div class="six columns">
				<div class="boxblog">
					<h5>Transatlantic</h5>
					<p class="small date">
						Posted on: 3 Oct 2013 <span class="has-tip tip-top" data-width="90" title="6 comments"><img src="images/comments.png" alt=""></span>
					</p>
					<p>
						<img src="images/temp/nivo3.jpg" alt="" class="thumb"> She was the Field Marshal of the Front Porch Knitting Needle Hussars, nicknamed "Hussies." Her approbation was olive oil; her discountenance prickly heat. "Of course," she added, "while recognizing that expatiation does not include brevity ...
					</p>
					<p>
						<a href="#" class="small continue">Continue reading</a>
					</p>
				</div>
			</div>
			<ul class="pagination">
				<li class="arrow unavailable"><a href="">&laquo;</a></li>
				<li class="current"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li class="unavailable"><a href="">&hellip;</a></li>
				<li><a href="">12</a></li>
				<li><a href="">13</a></li>
				<li class="arrow"><a href="">&raquo;</a></li>
			</ul>
		</div>
		<!-- SIDEBAR -->
		<!--<div class="four columns">
			<h6 class="sidebartitle">RECENT COMMENTS</h6>
			<div class="avatar">
				<img src="images/temp/author1.png" alt="">
			</div>
			<p>
				 Many pieces were proposed, but none seemed suitable, because each one wished to play a good ...
			</p>
			<div class="avatar">
				<img src="images/temp/author2.png" alt="">
			</div>
			<p>
				 Many pieces were proposed, but none seemed suitable, because each one wished to play a good ...
			</p>
			<div class="avatar">
				<img src="images/temp/author3.png" alt="">
			</div>
			<p>
				 Many pieces were proposed, but none seemed suitable, because each one wished to play a good ...
			</p>
			<br class="clear"/>
			<h6 class="sidebartitle">POPULAR TAGS</h6>
			<a href="#" class="tags">Photography</a>
			<a href="#" class="tags">Vintage</a>
			<a href="#" class="tags">Nature</a>
			<a href="#" class="tags">Design</a>
			<a href="#" class="tags">Printing</a>
			<a href="#" class="tags">Contemporary</a>
			<a href="#" class="tags">Classic</a>
			<a href="#" class="tags">Elegant</a>
			<a href="#" class="tags">Graphics</a>
			<br class="clear"/>
			<br/><br/>
			<h6 class="sidebartitle">POPULAR POSTS</h6>
			<p>
				7 Oct 2013
			</p>
			<p>
				Many pieces were proposed, but none seemed suitable, because each one wished to play a good and suitable part ...
			</p>
			<p>
				6 Sept 2013
			</p>
			<p>
				It was ready for production, when through accident we were disappointed about securing the private theatre on ...
			</p>
			<p>
				4 Aug 2013
			</p>
			<p>
				The over-kind praise which it won encouraged me to have the play printed. I decided, as I could see no other prospects...
			</p>
		</div>
	</div>
</div>
<div class="hr">
</div>
<!-- TWITTER
================================================== -->
<div class="tweetarea">
	<div class="tweettext">
		<div class="row">
			<div class="twelve columns">
				<div class="tweet">
				</div>
			</div>
		</div>
	</div>
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
<div class="copyright">
	<div class="row">
		<div class="six columns">
			 &copy;<span class="small"> Copyright 2014 Celebration Spot</span>
		</div>
		<div class="six columns">
			<span class="small floatright"> </span>
		</div>
	</div>
</div>
<!-- JAVASCRIPTS 
================================================== -->
<!-- Javascript files placed here for faster loading -->
<script src="javascripts/foundation.min.js"></script>
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